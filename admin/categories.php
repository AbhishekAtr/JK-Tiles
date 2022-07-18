<?php
session_start();
// session_regenerate_id();


?>

<?php
// Include the database configuration file  
include 'partials/db_connect.php';

// If file upload form is submitted 
$showAlert = false;
$showError = false;

if (isset($_POST["c_insert"])) {
    $cat_title = $_POST['category'];
    $cat_slug = $_POST['slug'];
    $insert = "INSERT INTO `categories`( `cat_title`, `slug`) VALUES ('$cat_title', '$cat_slug')";
    $smt = $conn->prepare($insert);
    $smt->execute();
    if ($insert) {
        $showAlert = true;
        header("loaction: categories.php");
    } else {
        $showError = "File upload failed, please try again.";
    }
    // $cat_title = $_POST['category'];
    // $cat_desc = $_POST['cat_desc'];
    // $showAlert = 'error';
    // if (!empty($_FILES["c_image"]["name"])) {
    //     // Get file info 
    //     $fileName = basename($_FILES["c_image"]["name"]);
    //     // $title = $_FILES['title']['name'];
    //     $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    //     // Allow certain file formats 
    //     $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    //     if (in_array($fileType, $allowTypes)) {
    //         $image = $_FILES['c_image']['tmp_name'];

    //         $imgContent = addslashes(file_get_contents($image));
    //         $destinationfile = 'upload/' . $fileName;
    //         if (move_uploaded_file($image, $destinationfile)) {
    //             // Insert image content into database
    //             $insert = "INSERT INTO `categories`( `cat_title`,`cat_img`, `cat_desc`) VALUES ('$cat_title','$destinationfile', ' $cat_desc')";
    //             $smt = $conn->prepare($insert);
    //             $smt->execute();
    //             if ($insert) {
    //                 $showAlert = true;
    //                 header("loaction: categories.php");
    //             } else {
    //                 $showError = "File upload failed, please try again.";
    //             }
    //         } else {
    //             $showError = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
    //         }
    //     } else {
    //         $showError = 'Please select an image file to upload.';
    //     }
    // }
}
?>

<?php
if (isset($_POST['delete_btn_set'])) {
    $del_id = $_POST['delete_id'];
    $delete = mysqli_query($conn, "DELETE FROM `categories` WHERE `cat_id`= ' $del_id'");
    $query = mysqli_query($conn, $delete);
}
include "include/css-url.php";
include "partials/sidebar.php";
?>



<div class="container">
    <div class="card mt-5 mb-3">
        <form class="m-4" method="post" action="categories.php" enctype="multipart/form-data">
            <?php

            if ($showAlert) {

                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hurry !!!!</strong> Your data is insert successfully.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            }

            if ($showError) {

                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error</strong> ' . $showError . '
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>';
            }
            ?>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="category" class="control-label">Category Name <sup class="mandatory">*</sup></label>
                        <input type="text" class="form-control" id="category" name="category" placeholder="Enter category name" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="cat_desc" class="control-label">Category ID <sup class="mandatory">*</sup></label>
                        <input type="number" class="form-control" id="slug" name="slug" placeholder="Enter id" maximum="2" minimum="1" required>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="input-group mr-tp-1-per">
                        <button type="submit" name="c_insert" title="Submit" class="btn btn-success btn-block">Add Category</button>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="input-group mr-tp-1-per">
                        <a href="" class="btn btn-danger btn-block">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-hover" id="employee_data">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Name</th>
                                    <!-- <th>Image</th>
                                        <th>Description</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                include 'partials/db_connect.php';
                                $sql = "SELECT * FROM `categories`";
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

                                            <td><?php echo $row['cat_title']; ?></td>
                                            <!-- <td>
                                                    <img src="<?php echo $row['cat_img']; ?>" alt="" width="100" height="100">
                                                </td>
                                                <td><?php echo $row['cat_desc']; ?></td> -->
                                            <td>
                                                <input type="hidden" class="delete_id_value" value="<?php echo $row['cat_id'] ?>">
                                                <a href='editcategories.php?id=<?php echo $row['cat_id'] ?>' type="button" class="btn btn-primary mr-1"><i class="fa fa-edit"></i>
                                                    <a href="javascript:void(0)" class="btn btn-danger delete_data"><i class="fa fa-trash"></i></a>
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
        $('.delete_data').click(function(e) {
            e.preventDefault();

            var deleteid = $(this).closest("tr").find('.delete_id_value').val();
            //   console.log(deleteid);
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
                            url: "categories.php",
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