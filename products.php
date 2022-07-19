<?php
include './admin/partials/db_connect.php';

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--title-->
    <title>JK Tiles | Products</title>
    <?php include "include/css-url.php"; ?>

</head>

<body>

    <?php include "include/header.php"; ?>

    <!--body content wrap start-->


    <!--header section start-->
    <section class="hero-section ptb-100 pt-165 gradient-overlay" style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="hero-bottom-shape-two" style="background: url('img/hero-bottom-shape.svg')no-repeat bottom center"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Our Product</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="index.php">Home</a></li>
                                <?php
                                $id = $_GET['id'];
                                $sql = "select * from products where product_id = $id";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <li class="list-inline-item breadcrumb-item active"><?php echo $row['product_cat'] ?></li>
                                <?php } ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--services section start-->
    <section class="services-section gray-light-bg mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <?php
                    $id = $_GET['id'];
                    $sql = "select * from products where product_id = $id";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="section-heading text-center mb-5">
                            <h2><?php echo $row['product_title']; ?></h2>
                            <p class="lead"><?php echo $row['product_cat']; ?></p>
                        </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-md-12 center">

                    <div class="image-hotspots">
                        <img src="<?php echo $url . $row['product_img']; ?>" class="img-fluid">
<!-- 
                        <a style="left: 30%; top: 18%;" class="image-hotspot image-hotspot-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                            <strong>1</strong>
                            <span class="ring"></span><span class="circle"></span><span class="ring"></span><span class="circle"></span></a>

                        <a style="left: 29%; top: 53%;" class="image-hotspot image-hotspot-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                            <strong>2</strong>
                            <span class="ring"></span><span class="circle"></span><span class="ring"></span><span class="circle"></span></a>

                        <a style="left: 53%; top: 7%;" class="image-hotspot image-hotspot-dark" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                            <strong>3</strong>
                            <span class="ring"></span><span class="circle"></span><span class="ring"></span><span class="circle"></span></a>

                        <a style="left: 74%; top: 45%;" class="image-hotspot image-hotspot-light" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                            <strong>4</strong>
                            <span class="ring"></span><span class="circle"></span><span class="ring"></span><span class="circle"></span></a>

                        <a style="left: 82%; top: 62%;" class="image-hotspot image-hotspot-light" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                            <strong>5</strong>
                            <span class="ring"></span><span class="circle"></span><span class="ring"></span><span class="circle"></span></a> -->

                    </div>
                <?php
                    }
                ?>
                </div>


            </div>
        </div>
    </section>
    <!--services section end-->
    <section>
        <div class="container-fluid section page-section" style="background-image: url(img/slider/slider-6.jpg); background-size: cover; padding:100px">
            <div class="row">
                <div class="col-md-12">
                <?php
                    $id = $_GET['id'];
                    $sql = "select * from products where product_id = $id";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="heading-block center clearfix my-5">
                        <h2 class="text-white">Technical Specs</h2>
                        <div class="table-responsive bg-light">
                            <p><?php echo $row['product_desc'] ?></p>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </section>



    <!--contact us section start-->
    <section class="contact-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4>Ready to get started?</h4>
                        <form action="#" method="POST" id="contactForm1" class="contact-us-form" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn secondary-solid-btn" id="btnContactUs">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2>Looking for a excellent Business idea?</h2>
                        <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>
                        <hr class="my-5">
                        <h5>Our Headquarters</h5>
                        <address>
                            100 yellow house, Mn <br>
                            Factory, United State, 13420
                        </address>
                        <br>
                        <span>Phone: +1234567890123</span> <br>
                        <span>Email: <a href="mailto:email@yourdomain.com" class="link-color">email@yourdomain.com</a></span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end-->



    <!--client section start-->
    <div class="client-section ptb-100 gray-light-bg">
        <div class="container">
            <!--clients logo start-->
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                    <?php
                            $sql = "SELECT * from `gallery` where `slug` = 'products'";
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
                                    <div class="item single-client w-100">
                                        <img src="<?php echo $url . $row['image_url'] ?>" alt="client logo" class="client-img w-100">
                                    </div>
                            <?php }
                            } ?>
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </div>
    <!--client section start-->
    <section>
        <!-- bootstrap image gallery 1 -->
        <div class="container">
            <h2 class="text-center">Concrete block making machine</h2>
            <h4 class="text-center">Gallery</h4>

            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/products/1A-MANUAL VIBRO.png">
                    <img class="img-fluid" src="img/products/1C- FULLY AUTOMATIC PAVER.png">
                </div>

                <div class="col-md-4">
                    <img class="img-fluid" src="img/products/2B-semi automatic double station brick making machine.png">
                    <img class="img-fluid" src="img/products/2B-semi automatic double station brick making machine.png">
                </div>

                <div class="col-md-4">
                    <img class="img-fluid" src="img/products/5 A-Tile's Top Layer SMF Based Hardener & shiner.png">
                    <img class="img-fluid" src="img/products/4A-silicon plastic mould.png">
                </div>



            </div>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Enquiry ALL MODELS</h2>
                    <p>Enquiry all our different Fly Ash Machine models:</p>
                    <button class="btn secondary-solid-btn">Buy Now</button>
                </div>
            </div>
        </div>
    </section>
    <section class="call-to-action py-5 gray-light-bg">
            <div class="container">
                <div class="row justify-content-around align-items-center mb-2">
                    <div class="col-md-12">
                        <div class="subscribe-content">
                            <h2 class="mb-1 text-center">Get in Touch</h2>
                            <p class="text-center">We are amongst the prominent manufacturers of the wide assortment of the Cement Floor Tiles and Hollow Block Making Machines. </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around align-items-center mt-5">
                    <div class="col-md-3">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="ti-location-pin icon-sm color-secondary"></span>
                                </div>
                                <div>
                                    <h5 class="mb-0">Noida Branch</h5>
                                    <p class="text-muted mb-0">Near Pradhan Mkt Vill Sarfabad Sector-73 Noida Gautam Buddha Nagar, Noida - 201304, Gautam Budh Nagar, Uttar Pradesh, India</p>
                                    <p class="text-muted mb-0"> <a href="tel: +9178271 12429"> +91 78271 12429
                                        </a>, <a href="tel:+917777000006">+91 7777000006</a></p>
                                    <p class="text-muted mb-0"> <a href="mailto:Guwahati@jktilesmachinerynoida.com"> info@jktilesmachinery.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="ti-location-pin icon-sm color-secondary"></span>
                                </div>
                                <div>
                                    <h5 class="mb-0">Guwahati Branch</h5>
                                    <p class="text-muted mb-0">C/O, Fatik Das, Azara, Dharapur, Kamrup Metropolitan Borjhar, Guwahati - 781017, Kamrup, Assam, India</p>
                                    <p class="text-muted mb-0"> <a href="tel:+917086246108">+91 70862 46108</a>, <a href="tel:+916001344355">+91 60013 44355</a>, <a href="tel:+917896868124">+91 78968 68124</a></p>
                                    <p class="text-muted mb-0"> <a href="mailto:Guwahati@jktilesmachinerynoida.com">Guwahati@jktilesmachinerynoida.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="ti-location-pin icon-sm color-secondary"></span>
                                </div>
                                <div>
                                    <h5 class="mb-0">Hyderabad Branch</h5>
                                    <p class="text-muted mb-0">Landmark - Delhi Public School, Plot No:518, Village - Bowrampet, DPS Rd, Bachupally, Hyderabad, Telangana 500043</p>
                                    <p class="text-muted mb-0"> <a href="tel:+919618440701">+91 96184 40701</a>
                                        <a href="tel:+917303075275">+91 73030 75275</a>,<a href="tel:+917075632133">+91 70756 32133</a>
                                    </p>
                                    <p class="text-muted mb-0"> <a href="mailto:hyderabad@jktilesmachinerynoida.com">hyderabad@jktilesmachinerynoida.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="ti-location-pin icon-sm color-secondary"></span>
                                </div>
                                <div>
                                    <h5 class="mb-0">Bhuneswar  Branch </h5>
                                    <p class="text-muted mb-0">PLOT NO-958,KHATA NO-405,KHARVEL ESTATE, NAKHARA,BHUBANESWAR, Khordha - 752101, Khorda, Odisha, India</p>
                                    <p class="text-muted mb-0"> <a href="tel:+918046062438">+91 8046062438</a>
                                        <a href="tel:+919667460380">+91 96674 60380</a>,<a href="tel:+917749038142">+91 77490 38142</a>
                                    </p>
                                    <p class="text-muted mb-0"> <a href="mailto:odisha@jktilesmachinerynoida.com">odisha@jktilesmachinerynoida.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!--footer section start-->
    <?php include "include/footer.php"; ?>
    <!--footer section end-->

    <?php include "include/js-url.php"; ?>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>