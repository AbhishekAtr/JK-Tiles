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
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Blog</a></li>
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
                    <div class="col-lg-8 col-md-8">
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
                    <div class="col-lg-4 col-md-4">
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

    </div>
    <!--body content wrap end-->

    <!--footer section start-->
    <?php include "include/footer.php"; ?>
    <!--footer section end-->

    <?php include "include/js-url.php"; ?>
</body>

</html>