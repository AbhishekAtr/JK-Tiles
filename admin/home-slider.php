<?php
session_start();
// session_regenerate_id();
include 'partials/insert.php';
include "include/css-url.php";
include "partials/sidebar.php";
?>
<?php
if (isset($_POST['delete_btn_set'])) {
    $id = $_POST['delete_id'];
    $delete = mysqli_query($conn, $query = "DELETE FROM `home-slider` WHERE Id='$id'");
    $query = mysqli_query($conn, $delete);
}
?>

<div class="container">
    <div class="card mt-5 mb-3">
        <form class="mt-5" method="post" action="home-slider.php" enctype="multipart/form-data">
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
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Image (png,jpeg,jpg) (1920x800 in pixel, Max size 1MB)<sup class="mandatory">*</sup> </label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" file-input="packageFile" accept=".jpg, .jpeg, .png" required>
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <label for="input-rounded" class="control-label">Title<sup class="mandatory">*</sup> </label>
                    <div class="input-group mb-3">
                        <input type="Title" class="form-control" name="title" id="title" placeholder="Title" required>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="input-group mb-3 mt-2">
                        <button type="submit" name="submit" title="Submit" class="btn btn-success btn-block">Add Slider</button>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="input-group mb-3 mt-2">
                        <a href="home-slider.php" name="cancel" title="Cancel" class="btn btn-danger btn-block">Cancel</a>
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
                        <table id="employee_data" class="table table-hover">
                            <thead>
                                <tr role="row">
                                    <th>S.no</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                include 'partials/db_connect.php';
                                $sql = "SELECT * from `home-slider`";
                                if (mysqli_query($conn, $sql)) {
                                } else {
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
                                            <td>
                                                <?php echo $row['slider_title']; ?>
                                            </td>
                                            <td>
                                                <input type="hidden" class="delete_id_value" value="<?php echo $row['Id'] ?>">
                                                <a href='edithomeslider.php?id=<?php echo $row['Id'] ?>' type="button" class="btn btn-primary mr-1"><i class="fa fa-edit"></i>
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
                            url: "home-slider.php",
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