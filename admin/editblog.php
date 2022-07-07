<?php
// Include the database configuration file  
include 'partials/db_connect.php';

// If file upload form is submitted 
$status = false;
$statusMsg = false;
if (isset($_POST["p_insert"])) {
    $id = $_GET['id'];
    $product_title = $_POST['p_name'];
    $product_desc = $_POST['p_desc'];
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
                // Update content into database
                $update = "UPDATE `blog` SET `blog_title`='$product_title',`description`='$product_desc',`image_url`='$destinationfile' WHERE `id`='$id'";
                $smt = $conn->prepare($update);
                $smt->execute();
                if ($update) {
                    $status = true;
                    header("location: blog.php");
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

<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * from `blog` where id='$id'");
$row = mysqli_fetch_array($query);
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
<div class="content-body my-5 height-100 bg-light" id="main">

    <div class="container-fluid">
        <div class="card mt-5 mb-3 p-4">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="products.php">
                        <i class="fa fa-arrow-left text-success"></i>
                    </a>
                </div>

                <form class="" method="post" action="editblog.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                    <div class="row page-titles mx-0">
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                <label for="productname" class="control-label">Blog Title<sup class="mandatory">*</sup></label>
                                <input type="text" class="form-control" name="p_name" placeholder="Enter blog name" value="<?php echo $row['blog_title']; ?>">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                <label for="image" class="control-label">Blog Image <sup class="mandatory">*</sup></label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="p_image" file-input="packageFile" accept=".jpg, .jpeg, .png, .gif">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $id = $_GET['id'];
                        $query = mysqli_query($conn, "SELECT * from `blog` where id='$id'");
                        $row = mysqli_fetch_array($query);
                        ?>
                        <div class="col-md-12">
                            <textarea id="mytextarea" class="form-control" rows="5" placeholder=" " spellcheck="false" name="p_desc"><?php echo $row['description']; ?> </textarea>
                        </div>
                        <div class="col-md-1 mt-2">
                            <div class="form-group">
                                <div class="input-group  mt-4">
                                    <button type="submit" name="p_insert" title="Submit" class="btn btn-info btn-block">Upload</button>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-1 mt-2">
                            <div class="form-group">
                                <div class="input-group mt-4">
                                    <a href="editproducts.php" name="cancel" title="cancel" class="btn btn-danger btn-block">Cancel</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "include/js-url.php"; ?>