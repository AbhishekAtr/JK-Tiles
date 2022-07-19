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
    <title>JK Tiles | Gallery</title>
    <?php include "include/css-url.php"; ?>

</head>

<body>

    <?php include "include/header.php"; ?>

    <!--body content wrap start-->
    <div class="main">

        <!--header section start-->
        <section class="hero-section ptb-100 pt-165 gradient-overlay" style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
            <div class="hero-bottom-shape-two" style="background: url('img/hero-bottom-shape.svg')no-repeat bottom center"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                            <h1 class="text-white mb-0">Blog Detail</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item"><a href="blog.php">Blog</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Blog Detail</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->
       
        <!--blog section start-->
        <div class="module ptb-100">
            <div class="container">
                <div class="row">
                <?php
                $id = $_GET['id'];
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
                    <div class="col-lg-9 col-md-8">
                        <!-- Post-->
                        <article class="post">
                            <div class="post-preview"><img src="<?php echo $url . $row['image_url'] ?>" alt="article" class="img-fluid" /></div>
                            <div class="post-wrapper">
                                <div class="post-header">
                                    <h1 class="post-title"><?php echo $row['blog_title'] ?></h1>
                                    <ul class="post-meta">
                                        <li><?php echo $row['date'] ?></li>
                                        <!-- <li>In <a href="#">Branding</a>, <a href="#">Design</a></li>
                                        <li><a href="#">3 Comments</a></li> -->
                                    </ul>
                                </div>
                                <div class="post-content">
                                    <p><?php echo $row['description'] ?></p>
                                </div>
                                <!-- <div class="post-footer">
                                <div class="post-tags"><a href="#">Lifestyle</a><a href="#">Music</a><a href="#">News</a><a href="#">Travel</a></div>
                            </div> -->
                            </div>
                        </article>
                        <!-- Post end-->

                    </div>
                    
                <?php
                    }
                }
                ?>
                    <div class="col-lg-3 col-md-4">
                        <div class="sidebar-right pl-4">
                            <!-- Recent entries widget-->
                            <aside class="widget widget-recent-entries-custom">
                                <div class="widget-title">
                                    <h6>Recent Posts</h6>
                                </div>
                                <ul>
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
                                            <li class="clearfix">
                                                <div class="wi"><a href="#"><img src="<?php echo $url . $row['image_url'] ?>" alt="recent post" class="img-fluid rounded" /></a></div>
                                                <div class="wb"><a href="#"><?php echo $row['blog_title'] ?></a><span class="post-date"><?php echo $row['date'] ?></span></div>
                                            </li>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--blog section end-->

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

    </div>
    <!--body content wrap end-->

    <!--footer section start-->
    <?php include "include/footer.php"; ?>
    <!--footer section end-->

    <?php include "include/js-url.php"; ?>
</body>

</html>