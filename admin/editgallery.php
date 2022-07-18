<?php
// Include the database configuration file  
include 'partials/db_connect.php';


// If file upload form is submitted 

    $status = false;
    $statusMsg = false;
    
    if (isset($_POST["c_update"])) {
        $status = 'error';
        if (!empty($_FILES["p_image"]["name"])) {
    
            // Get file info 
            $fileName = basename($_FILES["p_image"]["name"]);
    
            // $title = $_FILES['title']['name'];
            $fileType1 = pathinfo($fileName, PATHINFO_EXTENSION);
            // Allow certain file formats 
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            if (in_array($fileType1, $allowTypes)) {
                $image = $_FILES['p_image']['tmp_name'];
    
                $imgContent1 = addslashes(file_get_contents($image));
    
                $destinationfile = 'upload/' . $fileName;
    
                if (move_uploaded_file($image, $destinationfile)) {
                    // Insert image content into database
                    $insert = "UPDATE `gallery` SET  `image_url` = '$destinationfile' WHERE  `id` = '$Id'";
                    $smt = $conn->prepare($insert);
                    $smt->execute();
                    if ($insert) {
                        $status = true;
                        header("location: gallery.php");
                    } else {
                        $statusMsg = "File upload failed, please try again.";
                    }
                } else {
                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
                }
            } else {
                $statusMsg = 'Please select an image file to upload.';
            }
        }
    }


?>


<?php include "include/css-url.php"; ?>
<?php include "partials/sidebar.php"; ?>
<?php

if ($status) {

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hurry !!!!</strong> Your Image uploaded successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}

if ($statusMsg) {

    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error</strong> ' . $statusMsg . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}
?>
<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * from `gallery` where id='$id'");
$row = mysqli_fetch_array($query);
?>
<div class="content-body my-5 height-100 bg-light" id="main">
    <div class="container">
        <div class="card mt-5 mb-3 p-4">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="gallery.php">
                        <i class="fa fa-arrow-left text-success"></i>
                    </a>
                </div>
            </div>
            <form method="post" action="editgallery.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <label for="image" class="control-label">Product Image <sup class="mandatory">*</sup></label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="p_image" name="p_image" file-input="packageFile" accept=".jpg, .jpeg, .png, .gif" required>
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-2 col-sm-6">
                        <label></label>
                        <div class="input-group mt-2">
                            <button type="submit" name="c_update" title="Submit" class="btn btn-success btn-block">Update Category</button>
                            <!-- <button type="button" title="Cancel" class="btn btn-danger mr-lf-2-per" ng-click="cancel()">Cancel</button> -->
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <label></label>
                        <div class="input-group mt-2">
                            <a href="gallery.php" name="c_update" title="Submit" class="btn btn-danger btn-block">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "include/js-url.php"; ?>