<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description" content="">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--title-->
    <title>JK Tiles | Blog</title>
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
                            <h1 class="text-white mb-0">Blog</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Blog</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->

        <!--blog section start-->
        <section class="our-blog-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-heading mb-5">
                            <h2>Our Latest Blogs</h2>
                            <p class="lead">
                                Enthusiastically drive revolutionary opportunities before emerging leadership. Phosfluorescently cultivate emerging alignments time methods of empowerment.
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
                                        <h3 class="h5 mb-2 card-title"><a href="blog-detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['blog_title'] ?></a></h3>
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
                   
                </div>
            </div>
        </section>
        <!--blog section end-->

    </div>
    <!--body content wrap end-->

    <!--footer section start-->
    <?php include "include/footer.php"; ?>
    <!--footer section end-->

    <?php include "include/js-url.php"; ?>
</body>

</html>