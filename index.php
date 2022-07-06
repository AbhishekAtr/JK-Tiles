<?php
include './admin/partials/db_connect.php';
?>

<!doctype html>
<html lang="en">

<head>
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

    <?php include "include/css-url.php"; ?>

</head>

<body>

    <?php include "include/header.php"; ?>

    <!--body content wrap start-->
    <div class="main">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </ol>
            <div class="carousel-inner">
                <img class="d-block w-100" src="img/slider/slider-3.jpg" alt="First slide" />
                <div class="carousel-item active">

                    <div class="carousel-caption d-flex">
                        <div class="animate__animated animate__backInLeft animate__delay-1s wt-30">
                            <img src="img/products/m8.png" alt="">
                        </div>
                        <div class="d-block text-white animate__animated animate__backInUp animate__delay-3s w-40">
                            <h3 class="text-white">Automatic Fly Ash Brick Machine</h3>
                            <p class="text-white">The Automatic block making Machine is designed with the feeding device rotating at high speed. </p>
                        </div>

                        <div class="animate__animated animate__backInRight animate__delay-2s w-30">
                            <img src="img/products/p1.png" alt="" style="height: 366px;">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <img class="d-block w-100" src="img/slider/slider-3.jpg" alt="Second slide" /> -->
                    <div class="carousel-caption d-flex">
                        <div class="animate__animated animate__backInLeft animate__delay-1s w-30">
                            <img src="img/products/m7.png" alt="">
                        </div>
                        <div class="d-block text-white animate__animated animate__backInUp animate__delay-3s w-40">
                            <h3 class="text-white">Hollow Block Making Machine</h3>
                            <p class="text-white"></p>
                        </div>
                        <div class="animate__animated animate__backInRight animate__delay-2s w-30">
                            <img src="img/products/p9.png" alt="">

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <img class="d-block w-100" src="img/slider/slider-3.jpg" alt="Third slide" /> -->
                    <div class="carousel-caption d-flex">
                        <div class="animate__animated animate__backInLeft animate__delay-1s wt-30">
                            <img src="img/products/m1.png" alt="">
                        </div>
                        <div class="d-block text-white animate__animated animate__backInUp animate__delay-3s w-40">
                            <h1 class="text-white">Paving Block Making Machine</h1>
                            <p class="text-white"></p>
                        </div>
                        <div class="animate__animated animate__backInRight animate__delay-2s w-30">

                            <img src="img/products/p2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <img class="d-block w-100" src="img/slider/slider-3.jpg" alt="Third slide" /> -->
                    <div class="carousel-caption d-flex">
                        <div class="animate__animated animate__backInLeft animate__delay-1s wt-30">
                            <img src="img/products/m10.png" alt="">
                        </div>
                        <div class="d-block text-white animate__animated animate__backInUp animate__delay-3s w-40">
                            <h3 class="text-white">Concrete Mixing Machine</h3>
                            <p class="text-white"></p>
                        </div>

                        <div class="animate__animated animate__backInRight animate__delay-2s w-30">
                            <img src="img/products/p10.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <img class="d-block w-100" src="img/slider/slider-3.jpg" alt="Third slide" /> -->
                    <div class="carousel-caption d-flex">
                        <div class="animate__animated animate__backInLeft animate__delay-1s wt-30">
                            <img src="img/products/m12.png" alt="">
                        </div>
                        <div class="d-block text-white animate__animated animate__backInUp animate__delay-3s w-40">
                            <h3 class="text-white">Color Mixing Machine</h3>
                            <p class="text-white"></p>
                        </div>

                        <div class="animate__animated animate__backInRight animate__delay-2s w-30">
                            <img src="img/products/p6.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <img class="d-block w-100" src="img/slider/slider-3.jpg" alt="Third slide" /> -->
                    <div class="carousel-caption d-flex">
                        <div class="animate__animated animate__backInLeft animate__delay-1s wt-30">
                            <img src="img/products/m1.png" alt="">
                        </div>
                        <div class="d-block text-white animate__animated animate__backInUp animate__delay-3s w-40">
                            <h3 class="text-white">PVC Rubber Modules</h3>
                            <p class="text-white"></p>
                        </div>
                        <div class="animate__animated animate__backInRight animate__delay-2s w-30">
                            <img src="img/products/m13.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <img class="d-block w-100" src="img/slider/slider-3.jpg" alt="Third slide" /> -->
                    <div class="carousel-caption d-flex">
                        <div class="animate__animated animate__backInLeft animate__delay-1s wt-30">
                            <img src="img/products/m2.png" alt="">
                        </div>
                        <div class="d-block text-white animate__animated animate__backInUp animate__delay-3s w-40">
                            <h3 class="text-white">Plastic Silicon Modules</h3>
                            <p class="text-white"></p>
                        </div>
                        <div class="animate__animated animate__backInRight animate__delay-2s w-30">
                            <img src="img/products/m14.png" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!--hero section end-->

        <!--about us section start-->
        <section class="about-us-section">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="video-promo-content mb-md-4 mb-lg-0">
                            <h2>Why Us JK Tiles Machinery?</h2>
                            <p>We put great emphasis on maintaining and enhancing the quality of our cement floor tiles and hollow block making machines. We keep a close eye on every development that takes place in the industry in terms of implementing new technologies and varying customer need.</p>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Extensive </strong> range of products</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>High <strong>quality</strong> standards</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Efficient</strong> and organized operations</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Efficient</strong> team</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Reasonable</strong> prices</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <!-- <div class="image-wrap">
                        <img src="img/products/about.png" alt="video" class="img-fluid">
                    </div> -->
                        <div class="card border-0 text-white">
                            <img src="img/products/p2.png" alt="video" class="img-fluid rounded">
                            <div class="card-img-overlay text-center">
                                <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-youtube video-play-icon color-bip shadow"><span class="ti-control-play"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about us section end-->

        <!--promo section start-->
        <section class=" p-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                            <?php
                            $sql = "SELECT * from `products`";
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
                                        <img src="<?php echo $url . $row['product_img'] ?>" alt="client logo" class="client-img w-100">
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--our work or portfolio section start-->
        <section class="our-portfolio-section my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Our Image Gallery</h2>
                            <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements. Intrinsicly
                                develop end-to-end customer service without extensive data.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $sql = "SELECT * from `gallery`";
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
                            <div class="col-lg-4 col-md-6">
                                <img src="<?php echo $url . $row['image_url'] ?>" alt="client logo" class="client-img w-100">
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </section>

        <!--promo section start-->
        <section class="promo-section gradient-overlay ptb-100" style="background: url('img/slider-img-2.jpg')no-repeat center center / cover fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="app-business-content text-center text-white">
                            <h2 class="text-white">Download Our Brochure</h2>
                            <p class="lead">Building your Apps busines helps attract more potential clients.
                                Our integrated marketing team will work directly long-term high-impact convergence. </p>

                            <div class="action-btns mt-5">
                                <ul class="list-inline app-download-list">
                                    <li class="list-inline-item">
                                        <a href="img/jk.pdf" class="d-flex2 align-items-center border rounded">
                                            <span class="fa fa-download icon-sm mr-3"></span>
                                            <div class="download-text text-left">
                                                <span>Download Brochure</span>
                                                <h5 class="mb-0">PDF</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--blog section start-->
        <section class="our-blog-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-heading mb-5">
                            <h2>Our Latest Blogs</h2>
                            <p class="lead">
                                Enthusiastically drive revolutionary opportunities before emerging leadership. Distinctively
                                transform tactical methods of empowerment via resource.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $sql = "SELECT * from `blog`";
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
                            <div class="col-md-4">
                                <div class="single-blog-card card border-0 shadow-sm">
                                    <span class="category position-absolute badge badge-pill badge-primary">Lifestyle</span>
                                    <img src="<?php echo $url . $row['image_url'] ?>" class="card-img-top position-relative" alt="blog">
                                    <div class="card-body">
                                        <h3 class="h5 mb-2 card-title"><a href="#"><?php echo $row['blog_title'] ?></a></h3>
                                        <div class="post-meta mb-2">
                                            <ul class="list-inline meta-list">
                                                <li class="list-inline-item"><span class="fa fa-calendar mr-2"></span><?php echo $row['date'] ?></li>
                                                
                                            </ul>
                                        </div>
                                        <!-- <p class="card-text" style="white-space: nowrap; overflow:hidden; text-overflow:ellipsis;"><?php echo  $row['description'] ?></p> -->
                                        <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>

                </div>
                <div class="action-btn text-lg-center text-sm-left">
                    <a href="blog.php" class="btn secondary-solid-btn">More Blogs</a>
                </div>
            </div>
        </section>
        <!--blog section end-->

        <!--testimonial section start-->

        <section class="testimonial text-center">
            <div class="container">

                <div class="heading white-heading">
                    <h4 class="text-white">Testimonials what clients say</h4>
                    <p class="lead">
                        Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                        e-business. Conveniently innovate compelling internal.
                    </p>
                </div>
                <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="testimonial4_slide">
                                <img src="img/user.jpg" class="img-circle img-responsive" />
                                <p> Assertively procrastinate distributed relationships whereas equity invested intellectual capital everything energistically underwhelm proactive.</p>
                                <h4>Mr. Anil Sharma</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial4_slide">
                                <img src="img/user.jpg" class="img-circle img-responsive" />
                                <p> Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.</p>
                                <h4>Mr. Rahul</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial4_slide">
                                <img src="img/user.jpg" class="img-circle img-responsive" />
                                <p> Interactively grow backend scenarios through one paradigms. Distinctively and communicate efficient information without effective meta-services.</p>
                                <h4>Mr. Abhishek Rajput</h4>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </section>



        <!--client section start-->
        <div class="client-section ptb-100">
            <div class="heading white-heading">
                <h2 class=" bold">Our Key Clients</h2>
            </div>
            <div class="container">

                <!--clients logo start-->
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                            <div class="item single-client">
                                <img src="img/clients-logo-01.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-02.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-03.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-04.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-05.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-06.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-07.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-08.png" alt="client logo" class="client-img">
                            </div>
                        </div>
                    </div>
                </div>
                <!--clients logo end-->
            </div>
        </div>
        <!--client section start-->

        <!--call to action section start-->
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
                                    <h5 class="mb-0">Odisha Branch </h5>
                                    <p class="text-muted mb-0">PLOT NO-958,KHATA NO-405,KHARVEL ESTATE, NAKHARA,BHUBANESWAR, Khordha - 752101, Khorda, Odisha, India</p>
                                    <p class="text-muted mb-0"> <a href="tel:+918046062438">+91 8046062438</a>
                                        <a href="tel:+919667460380">+91 96674 60380</a>,<a href="tel:+917749038142">+91 77490 38142</a>
                                    </p>
                                    <p class="text-muted mb-0"> <a href="mailto:odisha@jktilesmachinerynoida.com">odisha@jktilesmachinerynoida.com</a></p>
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
                </div>
            </div>
        </section>
        <!--call to action section end-->

    </div>
    <!--body content wrap end-->

    <?php include "include/footer.php"; ?>

    <div class="phone-icon scroll-top">
        <a href="tel:+917777000006">
            <i class="fa fa fa-phone text-white" aria-hidden="true"></i>
        </a>
    </div>

    <div class="whatsapp-icon scroll-top">
        <a href="https://api.whatsapp.com/send?phone=7827112429&text=hi..." target="_blank">
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </a>
    </div>

    <?php include "include/js-url.php"; ?>

</body>

</html>