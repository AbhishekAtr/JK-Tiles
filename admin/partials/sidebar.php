       <!DOCTYPE html>
       <html lang="en">

       <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Document</title>
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <style>
               @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");


               body {
                   padding-top: 90px;
               }

               .sign {
                   font-family: FontAwesome !important;
               }

               .nav-item a
               {
                padding: 10px;
                font-size: 18px;
               }

               @media (min-width: 768px) {
                   body {
                       padding-top: 0;
                   }
               }

               @media (min-width: 768px) {
                   body {
                       margin-left: 232px;
                   }
               }

               .navbar.fixed-left {
                   position: fixed;
                   top: 0;
                   left: 0;
                   right: 0;
                   z-index: 1030;
               }

               @media (min-width: 768px) {
                   .navbar.fixed-left {
                       bottom: 0;
                       width: 232px;
                       flex-flow: column nowrap;
                       align-items: flex-start;
                   }

                   .navbar.fixed-left .navbar-collapse {
                       flex-grow: 0;
                       flex-direction: column;
                       width: 100%;
                   }

                   .navbar.fixed-left .navbar-collapse .navbar-nav {
                       flex-direction: column;
                       width: 100%;
                   }

                   .navbar.fixed-left .navbar-collapse .navbar-nav .nav-item {
                       width: 100%;
                   }

                   .navbar.fixed-left .navbar-collapse .navbar-nav .nav-item .dropdown-menu {
                       top: 0;
                   }
               }

               @media (min-width: 768px) {
                   .navbar.fixed-left {
                       right: auto;
                   }

                   .navbar.fixed-left .navbar-nav .nav-item .dropdown-toggle:after {
                       border-top: 0.3em solid transparent;
                       border-left: 0.3em solid;
                       border-bottom: 0.3em solid transparent;
                       border-right: none;
                       vertical-align: baseline;
                   }

                   .navbar.fixed-left .navbar-nav .nav-item .dropdown-menu {
                       left: 100%;
                   }
               }
           </style>
       </head>

       <body>
           <!-- <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top p-4">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
           </nav> -->
           <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-left">
               <a class="navbar-brand" href><img src="../img/jk-logo.jpg" style="width: 100%;"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse pt-4" id="navbarsExampleDefault">
                   <ul class="navbar-nav p-2">
                       <!-- <li class="nav-item">
                           <a href="home-slider.php" class="nav-link active">
                               <i class='fa fa-home nav_icon mr-3'></i>
                               <span class="nav_name">Home-Slider</span>
                           </a>
                       </li> -->
                       <li class="nav-item">
                           <a href="products.php" class="nav-link">
                               <i class='fa fa-shopping-cart nav_icon mr-3'></i>
                               <span class="nav_name">Products</span>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="categories.php" class="nav-link">
                               <i class='fa fa-bookmark nav_icon mr-3'></i>
                               <span class="nav_name">Categories</span>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="gallery.php" class="nav-link">
                               <i class='fa fa-picture-o nav_icon mr-3'></i>
                               <span class="nav_name">Gallery</span>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="blog.php" class="nav-link">
                               <i class='fa fa-rss-square nav_icon mr-3'></i>
                               <span class="nav_name">Blog</span>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="logout.php" class="nav-link">
                               <i class='fa fa-sign-out nav_icon sign mr-3'></i>
                               <span class="nav_name">SignOut</span>
                           </a>
                       </li>
                   </ul>
               </div>
           </nav>

       </body>

       <script>
           document.addEventListener("DOMContentLoaded", function(event) {

               const showNavbar = (toggleId, navId, bodyId, headerId) => {

                   const toggle = document.getElementById(toggleId),
                       nav = document.getElementById(navId),
                       bodypd = document.getElementById(bodyId),
                       headerpd = document.getElementById(headerId)

                   // Validate that all variables exist
                   if (toggle && nav && bodypd && headerpd) {
                       toggle.addEventListener('click', () => {
                           // show navbar
                           nav.classList.toggle('show1')
                           // change icon
                           toggle.classList.toggle('fa-times')
                           // add padding to body
                           bodypd.classList.toggle('body-pd')
                           // add padding to header
                           headerpd.classList.toggle('body-pd')
                       })
                   }
               }

               showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

               /*===== LINK ACTIVE =====*/
               const linkColor = document.querySelectorAll('.nav_link')

               function colorLink() {
                   if (linkColor) {
                       linkColor.forEach(l => l.classList.remove('active'))
                       this.classList.add('active')
                   }
               }
               linkColor.forEach(l => l.addEventListener('click', colorLink))
               // Your code to run since DOM is loaded and ready

           });
       </script>

       </body>

       </html>