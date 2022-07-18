<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./../img/favicon.png" type="image/png" sizes="16x16">
    <title>Jk-Tiles</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Document</title>
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
    <style>
               @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
               
               .img-xs {
                   width: 32px;
                   height: 32px;
               }

               .sign {
                   font-family: FontAwesome !important;
               }

               .nav-item a {
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

               .dropdown:hover .dropdown-menu {
                   display: block;
               }
           </style>
</head>

<body>



