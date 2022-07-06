<?php
include './admin/partials/db_connect.php';
?>



<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->

<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
        <section class="top_header_area_men">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 toheader">
                        <div class="top_header_area text-right">
                            <p>
                                <a href="tel:+91-78271 12429"><i class="fas fa-phone-alt color_blue_font_17 icon space-right-5 text-dark"></i><span class="text-dark">+91-78271 12429 </span>&nbsp;</a>
                                <a href="#" target="_blank"><i class="fa fa-facebook text-dark" aria-hidden="true"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter bo-social-twitter text-dark">&nbsp;</i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin bo-social-linkedin text-dark">&nbsp;</i></a>
                                <a href="#" target="_blank"><i class="fa fa-instagram bo-social-instagram text-dark">&nbsp;</i></a>
                                <a href="#" target="_blank"><i class="fa fa-youtube bo-social-youtube text-dark">&nbsp;</i></a>
                            </p>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto menu">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Gallery </a>
                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="gallery.php">Photos</a>
                                    <a class="dropdown-item" href="gallery.php">Videos</a>
                                </div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="blog.php">Blog</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Contact Us
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item contact_btn1" href="contact2.php">Noida Branch</a>
                                    <a class="dropdown-item contact_btn2" href="contact-us.php">Guwahati Branch</a>
                                    <a class="dropdown-item contact_btn3" href="contact3.php">Odisha Branch</a>
                                    <a class="dropdown-item contact_btn4" href="contact1.php">Hyderabad Branch</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/jk-logo.jpg" alt="logo" class="img-fluid" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false" href="#">Company</a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="about-us.php">About Us</a>
                                <a class="dropdown-item" href="manufacturing-facility.php">Manufacturing Facility</a>
                                <a class="dropdown-item" href="value.php">Company Value</a>
                                <a class="dropdown-item" href="#">Achievements</a>
                                <a class="dropdown-item" href="#">Customer Review</a>
                                <a class="dropdown-item" href="career.php">Careers</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                Products
                            </a>
                            <div class="mega-menu-content dropdown-menu">
                                <div class="container">
                                    <div class="row">
                                        <div class="tab col-lg-3">
                                            <?php
                                            $sql = "SELECT * from `categories`";
                                            $result = mysqli_query($conn, $sql);
                                            $num = mysqli_num_rows($result);
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                                <button class="tablinks" onmouseover="openCity(event, '<?php echo $row['cat_id'] ?>')"><?php echo $row['cat_title'] ?></button>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <?php
                                        $count = 1;
                                        $sql = "SELECT * from `categories`";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                            <div id="<?php echo $row['cat_id'] ?>" class="tabcontent ">
                                                <div class="row card-content">
                                                    <?php

                                                    $sql = "SELECT * from `products` where p_id =" . $row["cat_id"];
                                                    if (mysqli_query($conn, $sql)) {
                                                        echo "";
                                                    } else {
                                                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                                    }
                                                    $count = 1;
                                                    $result = mysqli_query($conn, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                            <div class="col-md-6 col-lg-4 col-sm-6">
                                                                <div class="card menu-card">
                                                                    <img src="<?php echo $url . $row['product_img'] ?>" class="card-img-top" alt="...">
                                                                </div>
                                                                <div class="card-content content text-center">
                                                                    <a href="">
                                                                        <p><?php echo $row['product_title'] ?></p>
                                                                        <p><?php echo $row['product_cat'] ?></p>
                                                                    </a>
                                                                    <button class="btn accent-solid-btn btn-dark"><a href="img/jk.pdf" target="_blank">Download Brochure <span class="fa fa-download"></span></a> </button>
                                                                </div>
                                                            </div>
                                                    <?php }
                                                    } ?>
                                                </div>
                                            </div>
                                        <?php }
                                        $count++; ?>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link btn3d btn btn-default btn-lg" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Hydraulic Machine</a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item contact_btn1" href="products.php">JK Hydro + Vibro</a>
                                <a class="dropdown-item contact_btn2" href="products.php">Hydraulic Cement & Flyash</a>
                                <a class="dropdown-item contact_btn3" href="products.php">JK Multi Purpose Hydrulic</a>
                                <a class="dropdown-item contact_btn4" href="products.php">JK Semi-auto Double Station</a>
                            </div>
                        </li>

                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link btn accent-solid-btn btn-dark" href="#" data-toggle="modal" data-target="#exampleModal">Enquiry Now</a>-->
                        <!--</li>-->
                        <button class="btn accent-solid-btn btn-dark " data-toggle="modal" data-target="#exampleModal">Enquiry Now</button>
                        <button class="btn accent-solid-btn btn-dark"><a href="img/jk.pdf" target="_blank">Download Brochure <span class="fa fa-download"></span></a> </button>
                    </ul>
                </div>
            </div>
        </nav>
    </nav>
</header>

<!--header section end-->


<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title bold text-white" id="exampleModalLabel">Enquiry Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="get-in-touch-list">
                            <li>
                                <button class="btn btn-success">Noida</button>
                                <button class="btn btn-success">Guwahati</button>
                                <button class="btn btn-success">Odisha</button>
                                <button class="btn btn-success">Hyderabad</button>
                            </li>
                            <li class="d-flex1 align-items-center bold text-white py-2"><span class="fas fa-map-marker-alt mr-2"></span>Near Pradhan Mkt Vill Sarfabad Sector-73 Noida Gautam Buddha Nagar, Noida - 201304, Gautam Budh Nagar, Uttar Pradesh, India</li>
                            <li class="d-flex1 align-items-center py-2"><span class="fas fa-envelope mr-2"></span> <a href="mailto:info@jktilesmachinery.com" class=" bold text-white">info@jktilesmachinery.com</a> </li>
                            <li class="d-flex1 align-items-center bold text-white py-2"><span class="fas fa-phone-alt mr-2"></span> <a href="tel:+91-7827112429" class=" bold text-white">+91-78271 12429</a></li>
                            <li class="d-flex1 align-items-center bold text-white py-2"><span class="fa fa-whatsapp mr-2"></span> <a href="https://api.whatsapp.com/send?phone=7777000006&amp;text=hi..." class=" bold text-white">+91-7777000006</a> </li>

                        </ul>
                    </div>
                    <div class="col-md-6">
                        <form action="#" method="POST" id="contactForm1" class="contact-us-form" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone" placeholder="Enter Phone" required="required">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Enter Subject" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="submit" class="btn accent-solid-btn btn-dark" id="btnContactUs">
                    Send Message
                </button>
            </div>
        </div>
    </div>
</div>