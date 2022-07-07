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
                                $sql = "select * from hydraulic where id = $id";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <li class="list-inline-item breadcrumb-item active"><?php echo $row['cat'] ?></li>
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
                    $sql = "select * from hydraulic where id = $id";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="section-heading text-center mb-5">
                            <h2><?php echo $row['title']; ?></h2>
                            <p class="lead"><?php echo $row['cat']; ?></p>
                        </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-md-12 center">

                    <div class="image-hotspots">
                        <img src="<?php echo $url . $row['image_url']; ?>" class="img-fluid">
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
                    $sql = "select * from hydraulic where id = $id";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="heading-block center clearfix my-5">
                        <h2 class="text-white">Technical Specs</h2>
                        <div class="table-responsive bg-light">
                            <p><?php echo $row['description'] ?></p>
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
        <div class="container-fluid">
            <!--clients logo start-->
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <div class="item single-client">
                            <img src="img/products/slider/1A-MANUAL VIBRO.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/products/slider/1A-MANUAL VIBRO.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/products/slider/1C- FULLY AUTOMATIC PAVER.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/products/slider/2 A-Manual brick making machine.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/products/slider/2B-semi automatic double station brick making machine.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/products/slider/2C-automatic brick making machine.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/products/slider/3A- manual block making machine.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/products/slider/3B-egg laying block making machine.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/products/slider/3C-fully automatic block making machine.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/products/slider/4A-silicon plastic mould.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/products/slider/4B-PVC Rubber Mould.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/products/slider/5 A-Tile's Top Layer SMF Based Hardener & shiner.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/products/slider/5B-Back Layer PCE Based Fast Setting & workability.png" alt="client logo" class="client-img">
                        </div>
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
                    <h2>COMPARE ALL MODELS</h2>
                    <p>Compare all our different Fly Ash Machine models:</p>
                    <button class="btn secondary-solid-btn">Buy Now</button>
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