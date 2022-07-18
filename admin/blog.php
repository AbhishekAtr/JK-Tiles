<?php
//Include the database configuration file  
include 'partials/db_connect.php';

// If file upload form is submitted 
$status = false;
$statusMsg = false;

if (isset($_POST["p_insert"])) {
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
                // Insert image content into database
                $insert = "INSERT INTO `blog`(  `blog_title`, `image_url`, `date`, `description`) VALUES ('$product_title','$destinationfile', CURRENT_TIMESTAMP,'$product_desc')";
                $smt = $conn->prepare($insert);
                $smt->execute();
                if ($insert) {
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
if (isset($_POST['delete_btn_set'])) {
    $id = $_POST['delete_id'];
    $delete = mysqli_query($conn, $query = "DELETE FROM `blog` WHERE id='$id'");
    $query = mysqli_query($conn, $delete);
}
?>
<?php include "include/css-url.php"; ?>

<?php include "partials/sidebar.php"; ?>




    <div class="container">
        <div class="card mt-5 mb-3">
            <form class="mt-5" method="post" action="blog.php" enctype="multipart/form-data">
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
                <div class="row page-titles mx-0">
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="productname" class="control-label">Blog Title<sup class="mandatory">*</sup></label>
                            <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Enter category name" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="image" class="control-label">Blog Image <sup class="mandatory">*</sup></label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="p_image" name="p_image" file-input="packageFile" accept=".jpg, .jpeg, .png, .gif" required>
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 my-2">
                        <textarea id="mytextarea" class="form-control" rows="5" placeholder="Description" spellcheck="false" name="p_desc"> </textarea>
                    </div>
                    <div class="col-md-2 mt-2">
                        <div class="form-group">
                            <div class="input-group mt-4">
                                <button type="submit" name="p_insert" title="Submit" class="btn btn-success btn-block">Add Blog</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mt-2">
                        <div class="form-group">
                            <div class="input-group mt-4">
                                <a href="blog.php" name="cancel" title="cancel" class="btn btn-danger btn-block">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="employee_data">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th class="wd-10">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    include 'partials/db_connect.php';
                                    $sql = "SELECT * FROM blog";
                                    if (mysqli_query($conn, $sql)) {
                                        echo "";
                                    } else {
                                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                    }
                                    $count = 1;
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {

                                        while ($row = mysqli_fetch_array($result)) { ?>

                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td>
                                                    <img class="wd-120" src="<?php echo $row['image_url']; ?>" alt="" height="100" width="100">
                                                </td>
                                                <!-- <td>
                                                    <img class="wd-120" src="<?php echo $row['other_img']; ?>" alt="" height="100" width="100">
                                                </td> -->
                                                <td><?php echo $row['blog_title']; ?></td>
                                                <td>
                                                    <input type="hidden" class="delete_id_value" value="<?php echo $row['id'] ?>">
                                                    <a href='editblog.php?id=<?php echo $row['id']; ?>' type="button" class="btn btn-primary mr-1"><i class="fa fa-edit"></i>
                                                        <a href="javascript:void(0)" class="btn btn-danger delete_btn_ajax"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>

                                    <?php
                                            $count++;
                                        }
                                    } else {
                                        echo '0 results';
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include "include/js-url.php"; ?>
<?php include "include/deletemodal.php"; ?>
<script>
    $(document).ready(function() {
        $('.delete_btn_ajax').click(function(e) {
            e.preventDefault();

            var deleteid = $(this).closest("tr").find('.delete_id_value').val();
            console.log(deleteid);
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: "POST",
                            url: "blog.php",
                            data: {
                                "delete_btn_set": 1,
                                "delete_id": deleteid,
                            },
                            success: function(response) {

                                swal("Data Delete Successfully.!", {
                                    icon: "success",
                                }).then((result) => {
                                    location.reload();
                                });
                            }
                        });
                    }
                });
        });
    });
</script>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>