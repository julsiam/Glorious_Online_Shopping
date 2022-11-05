<?php
include("database.php");
session_start();

$id =  $_SESSION["id"];
$name = $mysqli->query("SELECT * FROM profile_information WHERE id = '$id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glorious - Profile Information</title>
    <link rel="icon" type="image/x-icon" href="src/favicon.PNG">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.csss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.csss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/profile.css">


    <style>
        .profile-btn::-webkit-file-upload-button {

            display: none;
        }


        /*----------------------------*\
	Section
\*----------------------------*/

        .section {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .section-title {
            position: relative;
            margin-bottom: 30px;
            margin-top: 15px;
        }

        .section-title .title {
            display: inline-block;
            text-transform: uppercase;
            margin: 0px;
        }

        .section-title .section-nav {
            float: right;
        }

        .section-title .section-nav .section-tab-nav {
            display: inline-block;
        }

        .section-tab-nav li {
            display: inline-block;
            margin-right: 15px;
        }

        .section-tab-nav li:last-child {
            margin-right: 0px;
        }

        .section-tab-nav li a {
            font-weight: 700;
            color: #8D99AE;
            text-decoration: none;
        }

        .section-tab-nav li a:after {
            content: "";
            display: block;
            width: 0%;
            height: 2px;
            background-color: #D10024;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .section-tab-nav li.active a {
            color: #D10024;
        }

        .section-tab-nav li a:hover:after,
        .section-tab-nav li a:focus:after,
        .section-tab-nav li.active a:after {
            width: 100%;
        }

        .section-title .section-nav .products-slick-nav {
            top: 0px;
            right: 0px;
        }

        /*----------------------------*\
	product
\*----------------------------*/

        /*  */
        .site-footer {
            background-color: black;
            padding: 45px 10px 20px 10px;
            font-size: 15px;
            line-height: 24px;
            color: #737373;
            margin-top: 50px;
        }

        .site-footer hr {
            border-top-color: #bbb;
            opacity: 0.5
        }

        .site-footer hr.small {
            margin: 20px 0
        }

        .site-footer h6 {
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 5px;
            letter-spacing: 2px
        }

        .site-footer a {
            color: #737373;
        }

        .site-footer a:hover {
            color: #3366cc;
            text-decoration: none;
        }

        .footer-links {
            padding-left: 0;
            list-style: none
        }

        .footer-links li {
            display: block
        }

        .footer-links a {
            color: #737373
        }

        .footer-links a:active,
        .footer-links a:focus,
        .footer-links a:hover {
            color: #3366cc;
            text-decoration: none;
        }

        .footer-links.inline li {
            display: inline-block
        }

        .site-footer .social-icons {
            text-align: right
        }

        .site-footer .social-icons a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-left: 6px;
            margin-right: 0;
            border-radius: 100%;
            background-color: #33353d
        }

        .copyright-text {
            margin: 0
        }

        @media (max-width:991px) {
            .site-footer [class^=col-] {
                margin-bottom: 30px
            }
        }

        @media (max-width:767px) {
            .site-footer {
                padding-bottom: 0
            }

            .site-footer .copyright-text,
            .site-footer .social-icons {
                text-align: center
            }
        }

        .social-icons {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .social-icons li {
            display: inline-block;
            margin-bottom: 4px
        }

        .social-icons li.title {
            margin-right: 15px;
            text-transform: uppercase;
            color: #96a2b2;
            font-weight: 700;
            font-size: 13px
        }

        .social-icons a {
            background-color: #eceeef;
            color: #818a91;
            font-size: 16px;
            display: inline-block;
            line-height: 44px;
            width: 44px;
            height: 44px;
            text-align: center;
            margin-right: 8px;
            border-radius: 100%;
            -webkit-transition: all .2s linear;
            -o-transition: all .2s linear;
            transition: all .2s linear
        }

        .social-icons a:active,
        .social-icons a:focus,
        .social-icons a:hover {
            color: #fff;
            background-color: #29aafe
        }

        .social-icons.size-sm a {
            line-height: 34px;
            height: 34px;
            width: 34px;
            font-size: 14px
        }

        .social-icons a.facebook:hover {
            background-color: #3b5998
        }

        .social-icons a.twitter:hover {
            background-color: #00aced
        }

        .social-icons a.linkedin:hover {
            background-color: #007bb6
        }

        .social-icons a.dribbble:hover {
            background-color: #ea4c89
        }

        @media (max-width:767px) {
            .social-icons li.title {
                display: block;
                margin-right: 0;
                font-weight: 600
            }
        }

        .product {
            position: relative;
            margin: 15px 0px;
            -webkit-box-shadow: 0px 0px 0px 0px #E4E7ED, 0px 0px 0px 1px #E4E7ED;
            box-shadow: 0px 0px 0px 0px #E4E7ED, 0px 0px 0px 1px #E4E7ED;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .product:hover {
            -webkit-box-shadow: 0px 0px 6px 0px #E4E7ED, 0px 0px 0px 2px #D10024;
            box-shadow: 0px 0px 6px 0px #E4E7ED, 0px 0px 0px 2px #D10024;
        }

        .product .product-img {
            position: relative;
        }

        .product .product-img>img {
            width: 100%;
        }

        .product .product-img .product-label {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .product .product-img .product-label>span {
            border: 2px solid;
            padding: 2px 10px;
            font-size: 12px;
        }

        .product .product-img .product-label>span.sale {
            background-color: #FFF;
            border-color: #000000;
            color: #000000;
        }

        .product .product-img .product-label>span.new {
            background-color: #293a4f;
            border-color: #ffffff;
            color: #FFF;
        }

        .product .product-body {
            position: relative;
            padding: 15px;
            background-color: #FFF;
            text-align: center;
            z-index: 20;
        }

        .product .product-body .product-category {
            text-transform: uppercase;
            font-size: 12px;
            color: #8D99AE;
        }

        .product .product-body .product-name {
            text-transform: uppercase;
            font-size: 14px;
        }

        .product .product-body .product-name>a {
            font-weight: 700;
            text-decoration: none;
        }

        .product .product-body .product-name>a:hover,
        .product .product-body .product-name>a:focus {
            color: #D10024;
        }

        .product .product-body .product-price {
            color: #3169af;
            font-size: 18px;
        }

        .product .product-body .product-price .product-old-price {
            font-size: 70%;
            font-weight: 400;
            color: #8D99AE;
        }

        .product .product-body .product-rating {
            position: relative;
            margin: 15px 0px 10px;
            height: 20px;
        }

        .product .product-body .product-rating>i {
            position: relative;
            width: 14px;
            margin-right: -4px;
            background: #FFF;
            color: #E4E7ED;
            z-index: 10;
        }

        .product .product-body .product-rating>i.fa-star {
            color: #e58b19;
        }

        .product .product-body .product-rating:after {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            height: 1px;
            background-color: #E4E7ED;
        }

        /*----------------------------*\
	Widget product
\*----------------------------*/

        .product-widget {
            position: relative;
        }

        .product-widget+.product-widget {
            margin: 30px 0px;
        }

        .product-widget .product-img {
            position: absolute;
            left: 0px;
            top: 0px;
            width: 60px;


        }

        .product-widget .product-img>img {
            width: 100%;
        }

        .product-widget .product-body {
            padding-left: 75px;
            min-height: 60px;
        }

        .product-widget .product-body .product-category {
            text-transform: uppercase;
            font-size: 10px;
            color: #8D99AE;
        }

        .product-widget .product-body .product-name {
            text-transform: uppercase;
            font-size: 12px;
        }

        .product-widget .product-body .product-name>a {
            font-weight: 700;
        }

        .product-widget .product-body .product-name>a:hover,
        .product-widget .product-body .product-name>a:focus {
            color: #D10024;
        }

        .product-widget .product-body .product-price {
            font-size: 14px;
            color: #D10024;
        }

        .product-widget .product-body .product-price .product-old-price {
            font-size: 70%;
            font-weight: 400;
            color: #8D99AE;
        }

        .product-widget .product-body .product-price .qty {
            font-weight: 400;
            margin-right: 10px;
        }

        .product-widget .delete {
            position: absolute;
            top: 0;
            left: 0;
            height: 14px;
            width: 14px;
            text-align: center;
            font-size: 10px;
            padding: 0;
            background: #1e1f29;
            border: none;
            color: #FFF;
        }

        /*----------------------------*\
	Products slick
\*----------------------------*/

        .slick-track {
            opacity: 1;
            width: 100%;
            transform:
                translate3d(-1465px, 0px, 0px);
        }

        .products-slick .slick-list {
            padding-bottom: 60px;
            margin-bottom: -60px;
            z-index: 2;
        }

        .products-slick .product.slick-slide {
            margin: 15px;
        }

        .products-tabs>.tab-pane {
            display: block;
            height: 0;
            opacity: 0;
            visibility: hidden;
            overflow-y: hidden;
            padding-bottom: 60px;
            margin-bottom: -60px;
        }

        .products-tabs>.tab-pane.active {
            opacity: 1;
            visibility: visible;
            height: auto;
        }

        .products-slick-nav {
            position: absolute;
            right: 15px;
            z-index: 10;
        }

        .products-slick-nav .slick-prev,
        .products-slick-nav .slick-next {
            position: static;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
            width: 20px;
            height: 20px;
            display: inline-block !important;
            margin: 0px 2px;
        }

        .products-slick-nav .slick-prev:before,
        .products-slick-nav .slick-next:before {
            font-size: 14px;
        }

        /*=========================================================
	07 -> PRODUCTS PAGE
===========================================================*/


        .main-raised {

            margin: -7px 30px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }

        .main {

            background: #fff;
            position: relative;
            z-index: 3;

        }

        .mainn-raised {

            margin: px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }

        .mainn {

            background: #C9D6FF;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #E2E2E2, #C9D6FF);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #426a79, #3e2c75);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */




            position: relative;
            z-index: 3;

        }
    </style>


</head>

<body>
    <div class="app-container" style="display: grid;">

        <div class="app-content">
            <div style="position: sticky;top:0;z-index: 1 ;display: flex;align-items: center;justify-content: space-between;background-color: #0f2a689d;padding-left: 16px;height:55px">
                <div class="app-icon" style="display: flex;align-items: center;justify-content: left;gap:5px;">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z" />
                    </svg>
                    <h2 style="position: relative;top:-5px">Glorious</h2>

                </div>
                <div style="display: flex;align-items: center;justify-content: center;gap:20px">
                    <h3 style="color: white;font-weight: bold;color:#E8F1D4">Flash Sales</h1>
                        <div style="display: flex;align-items: center;justify-content: center;gap:5px;color:white">
                            <p style="color: white;position: relative;top:5px">Ending in: </p>
                            <div>
                            <button style="color: black;font-weight: bold;" class="hours">05</button> : <button style="color: black;font-weight: bold;" class="minutes">59</button> : <button style="color: black;font-weight: bold;" class="seconds">41</button> second/s
                            </div>
                        </div>
                </div>
                <div class="account-info" style="cursor: pointer;">



                    <div class="account-info-name">
                        <?php
                        $id =  $_SESSION["id"];
                        $name = $mysqli->query("SELECT * FROM profile_information WHERE id = '$id'");
                        foreach ($name as $info) {
                            echo $info['name'];
                        }

                        ?>
                    </div>
                    <div class="account-info-picture">
                        <?php foreach ($name as $info) {
                            if ($info['profile_image'] == NULL || $info['profile_image'] == "") {
                        ?>
                                <img src="data:image/png;base64,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" alt="">
                            <?php } else { ?>
                                <img src="test/uploads/<?= $info['profile_image'] ?>" alt="">
                        <?php }
                        } ?>
                    </div>
                    <!-- <button class="account-info-more">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                            <circle cx="12" cy="12" r="1" />
                            <circle cx="19" cy="12" r="1" />
                            <circle cx="5" cy="12" r="1" />
                        </svg>
                    </button> -->
                    <div class="header-menu" style="border-radius: 4px;position: absolute;top:50px;right:10px;background:#1d283c;text-align: center;
                    padding:30px 40px 30px 40px">

                        <a href="profile.php" style="color:white;text-decoration: none;font-size: 14px;">Profile</a><br>
                        <a href="login_signup/logout.php" style="color:white;text-decoration: none;font-size: 14px;">Log Out</a>



                    </div>
                </div>

            </div>

            <div class="app-content-header">


                <ul class="sidebar-list" style="display: flex;align-items: center;">
                    <li class="sidebar-list-item">
                        <a href="index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="inbox.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                                <polyline points="22 12 16 12 14 15 10 15 8 12 2 12" />
                                <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                            </svg>
                            <span>Inbox</span>
                        </a>
                    </li>

                    <li class="sidebar-list-item">
                        <a href="products.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                                <polyline points="22 12 16 12 14 15 10 15 8 12 2 12" />
                                <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                            </svg>
                            <span>Your Products</span>
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="cart.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                                <polyline points="22 12 16 12 14 15 10 15 8 12 2 12" />
                                <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                            </svg>
                            <span>Cart</span>
                        </a>
                    </li>
                </ul>

                <button class="mode-switch" title="Switch Theme">
                    <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                        <defs></defs>
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                    </svg>
                </button>
                <button class="app-content-headerButton" name="add_product" id="add_product">Add Product</button>
            </div>





        </div>

        <div>

            <div class="container" style="width: 100%;">
                <div class="innerwrap">
                    <section class="section1 clearfix">
                        <div>
                            <div class="row grid clearfix" style="display: flex;">
                                <form class="col2 first" action="add-process.php" enctype="multipart/form-data" method="post" style="width:100%">
                                    <div style="display: flex;align-items: center;justify-content: center;margin-bottom: 50px;">
                                        <?php
                                        foreach ($name as $info) {
                                            if ($info['profile_image'] == NULL || $info['profile_image'] == "") {
                                        ?>
                                                <img style="height: 120px;" src="data:image/png;base64,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" alt="">
                                            <?php } else { ?>
                                                <img style="height: 120px" src="test/uploads/<?= $info['profile_image'] ?>" alt="">
                                        <?php }
                                        } ?>
                                        <div>
                                            <h1><?php foreach ($name as $info) {
                                                    echo $info['name'];
                                                } ?></h1>
                                            <label for="profile-btn" style="display: inline-block;background-color: indigo;color: white;padding: 0.5rem;font-family: sans-serif;border-radius: 0.3rem;
                                                cursor: pointer;
                                              margin-top: 1rem;">Change Image</label>

                                            <input class="profile-btn" type="file" name="profile_image" data-buttonText="" />

                                        </div>

                                    </div>
                                    <div>
                                        <div style="display: flex;align-items: center; justify-content: space-between;margin-bottom: 10px;">
                                            <p>
                                                <b>Name:</b>*
                                                <?php foreach ($name as $info) {
                                                    echo $info['name'];
                                                } ?>


                                            </p>
                                            <input style="display:none" type="text" value=" <?php foreach ($name as $info) {
                                                                                                echo $info['id'];
                                                                                            } ?>" name="id" minlength="">
                                            <input style="text-align: center;" type="text" value="<?php foreach ($name as $info) {
                                                                                                        echo $info['name'];
                                                                                                    } ?>" name="name" minlength="">
                                        </div>
                                        <div style="display: flex;align-items: center; justify-content: space-between;margin-bottom: 10px;">
                                            <p>
                                                <b>Age:</b>*
                                                <?php foreach ($name as $info) {
                                                    echo $info['age'];
                                                } ?>
                                                years old

                                            </p>
                                            <input style="text-align: center;" type="text" value="  <?php foreach ($name as $info) {
                                                                                                        echo $info['age'];
                                                                                                    } ?>" name="age" minlength="">
                                        </div>
                                        <div style="display: flex;align-items: center; justify-content: space-between;margin-bottom: 10px;">

                                            <p><b>Location:</b>*
                                                <?php foreach ($name as $info) {
                                                    echo $info['location'];
                                                } ?></p>
                                            <input style="text-align: center;" type="text" value="<?php foreach ($name as $info) {
                                                                                                        echo $info['location'];
                                                                                                    } ?>" name="location">
                                        </div>
                                        <div style="display: flex;align-items: center; justify-content: space-between;margin-bottom: 10px;">
                                            <p><b>Email Address:</b>*
                                                <?php foreach ($name as $info) {
                                                    echo $info['email'];
                                                } ?></p>
                                            <input style="text-align: center;" value="<?php foreach ($name as $info) {
                                                                                            echo $info['email'];
                                                                                        } ?>" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                        </div>
                                        <div style="display: flex;align-items: center; justify-content: space-between;margin-bottom: 10px;">
                                            <p><b>Phone Number:</b>*
                                                <?php foreach ($name as $info) {
                                                    echo $info['phone'];
                                                } ?></p>

                                            <input style="text-align: center;" type="text" name="phone" value="<?php foreach ($name as $info) {
                                                                                                                    echo $info['phone'];
                                                                                                                } ?>" minlength="11" maxlength="11">
                                        </div>



                                        <div style="display: flex;align-items: center; justify-content: space-between;">
                                            <p><b>Password:</b>* <input type="password" value=" <?php foreach ($name as $info) {
                                                                                                    echo $info['password'];
                                                                                                } ?>" disabled>
                                            </p>

                                            <div style="margin-top: 20px;">
                                                <input class="password" value="<?php foreach ($name as $info) {
                                                                                    echo $info['password'];
                                                                                } ?>" required type="password" minlength="8" placeholder="New password" name="password" style="text-align: center;font-weight: bold;"><br><br>
                                                <input class="cpassword" value="<?php foreach ($name as $info) {
                                                                                    echo $info['password'];
                                                                                } ?>" required type="password" minlength="8" placeholder="Confirm password" name style="text-align: center;font-weight: bold;">
                                            </div>

                                        </div>

                                        <div style="display: flex;align-items: center; justify-content: space-between;margin-top: 20px;">
                                            <p><b>Date Joined:</b>*
                                                <?php foreach ($name as $info) {
                                                    echo $info['date_joined'];
                                                } ?></p>

                                        </div>

                                    </div>


                                    <div style="text-align: center;margin-top: 30px">
                                        <small class="text-error" style="font-weight: bold;color:red;opacity: 0;">Password do not match!</small><br>
                                        <input type="submit" value="Update Information" class="app-content-headerButton" name="update_info" id="update_info">
                                    </div>

                                </form>
                                <!-- <div class="col2 last">
                                    <div class="grid clearfix">
                                        <div class="col3 first">
                                            <h1>0</h1>
                                            <span>Following</span>
                                        </div>
                                        <div class="col3">
                                            <h1>0</h1>
                                            <span>Likes</span>
                                        </div>
                                        <div class="col3 last">
                                            <h1>0</h1>
                                            <span>Followed</span>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- partial:index.partial.html -->

                                <!-- container -->
                                <div class="">
                                    <!-- row -->


                                    <!-- Products tab & slick -->

                                    <div class="products-tabs" style="padding:50px !important ;overflow-y: scroll;height:750px !important">
                                        <!-- tab -->
                                        <h2>Latest Products</h2>
                                        <div id="tab1" class="tab-pane active">
                                            <div class="products-slick" data-nav="#slick-nav-1" style="display: flex;">
                                                <div class="product">
                                                    <a href="#">
                                                        <div class="product-img">
                                                            <img src="https://i.ibb.co/rygRLTd/product02.png" style="max-height: 170px;" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%
                                                                </span>
                                                                <span class="new">NEW
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="product-body">
                                                        <p class="product-category">HEADPHONES
                                                        </p>
                                                        <h3 class="product-name header-cart-item-name">
                                                            <a href="#" tabindex="-1">sony Headphones
                                                            </a>
                                                        </h3>
                                                        <h4 class="product-price header-cart-item-info">PHP. 320
                                                            <del class="product-old-price">PHP. 540
                                                            </del>
                                                        </h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <a href="#">
                                                        <div class="product-img">
                                                            <img src="https://i.ibb.co/sjwZzS4/product04.png" style="max-height: 170px;" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%
                                                                </span>
                                                                <span class="new">NEW
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="product-body">
                                                        <p class="product-category">Gadgets
                                                        </p>
                                                        <h3 class="product-name header-cart-item-name">
                                                            <a href="#" tabindex="-1">samsung PHONES
                                                            </a>
                                                        </h3>
                                                        <h4 class="product-price header-cart-item-info">PHP. 10,900<BR>
                                                            <del class="product-old-price">PHP. 12,500
                                                            </del>
                                                        </h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <a href="#">
                                                        <div class="product-img">
                                                            <img src="data:image/jpeg;base64,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" style="max-height: 170px;" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%
                                                                </span>
                                                                <span class="new">NEW
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="product-body">
                                                        <p class="product-category">Electronics
                                                        </p>
                                                        <h3 class="product-name header-cart-item-name">
                                                            <a href="#" tabindex="-1">SUB WOOFER SPEAKER
                                                            </a>
                                                        </h3>
                                                        <h4 class="product-price header-cart-item-info">PHP. 12,670
                                                            <del class="product-old-price">PHP. 10,200
                                                            </del>
                                                        </h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <a href="#">
                                                        <div class="product-img">
                                                            <img src="https://i.ibb.co/2hR1nrN/product03.png" style="max-height: 170px;" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%
                                                                </span>
                                                                <span class="new">NEW
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="product-body">
                                                        <p class="product-category">Computers
                                                        </p>
                                                        <h3 class="product-name header-cart-item-name">
                                                            <a href="#" tabindex="-1">HP i7 laptop 8gb
                                                                ram
                                                            </a>
                                                        </h3>
                                                        <h4 class="product-price header-cart-item-info">PHP. 11,500
                                                            <del class="product-old-price">PHP. 14,500
                                                            </del>
                                                        </h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <a href="#">
                                                        <div class="product-img">
                                                            <img src="data:image/jpeg;base64,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" style="max-height: 170px;" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%
                                                                </span>
                                                                <span class="new">NEW
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="product-body">
                                                        <p class="product-category">Fashion
                                                        </p>
                                                        <h3 class="product-name header-cart-item-name">
                                                            <a href="#" tabindex="-1">STYLISH KOREAN T-SHIRT FOR BOYS
                                                            </a>
                                                        </h3>
                                                        <h4 class="product-price header-cart-item-info">PHP. 540
                                                            <del class="product-old-price">PHP. 450
                                                            </del>
                                                        </h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="products-slick" data-nav="#slick-nav-1">
                                            </div>
                                        </div>
                                        <!-- tab -->
                                        <h2>Popular Products</h2>
                                        <div id="tab1" class="tab-pane active">
                                            <div class="products-slick" data-nav="#slick-nav-1" style="display: flex;">
                                                <div class="product">
                                                    <a href="#">
                                                        <div class="product-img">
                                                            <img src="data:image/jpeg;base64,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" style="max-height: 170px;" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%
                                                                </span>
                                                                <span class="new">NEW
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="product-body">
                                                        <p class="product-category">FASHION
                                                        </p>
                                                        <h3 class="product-name header-cart-item-name">
                                                            <a href="#" tabindex="-1">KOREAN hoodies
                                                            </a>
                                                        </h3>
                                                        <h4 class="product-price header-cart-item-info">PHP. 340
                                                            <del class="product-old-price">PHP. 340
                                                            </del>
                                                        </h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <a href="#">
                                                        <div class="product-img">
                                                            <img src="data:image/jpeg;base64,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" style="max-height: 170px;" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%
                                                                </span>
                                                                <span class="new">NEW
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="product-body">
                                                        <p class="product-category">Furnitures
                                                        </p>
                                                        <h3 class="product-name header-cart-item-name">
                                                            <a href="#" tabindex="-1">inflatable sofa chair
                                                            </a>
                                                        </h3>
                                                        <h4 class="product-price header-cart-item-info">PHP. 10,000
                                                            <del class="product-old-price">PHP. 8,500
                                                            </del>
                                                        </h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <a href="#">
                                                        <div class="product-img">
                                                            <img src="data:image/jpeg;base64,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" style="max-height: 170px;" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%
                                                                </span>
                                                                <span class="new">NEW
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="product-body">
                                                        <p class="product-category">fOODS & DRINKS
                                                        </p>
                                                        <h3 class="product-name header-cart-item-name">
                                                            <a href="#" tabindex="-1">INSTANT LUCKY ME NOODLES
                                                            </a>
                                                        </h3>
                                                        <h4 class="product-price header-cart-item-info">PHP. 200
                                                            <del class="product-old-price">PHP. 180
                                                            </del>
                                                        </h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <a href="#">
                                                        <div class="product-img">
                                                            <img src="data:image/jpeg;base64,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" style="max-height: 170px;" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%
                                                                </span>
                                                                <span class="new">NEW
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="product-body">
                                                        <p class="product-category">Electronics
                                                        </p>
                                                        <h3 class="product-name header-cart-item-name">
                                                            <a href="#" tabindex="-1">32" INCH FLAT SCREEN TV
                                                                
                                                            </a>
                                                        </h3>
                                                        <h4 class="product-price header-cart-item-info">PHP. 30,000
                                                            <del class="product-old-price">PHP. 28,000
                                                            </del>
                                                        </h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <a href="#">
                                                        <div class="product-img">
                                                            <img src="data:image/jpeg;base64,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" style="max-height: 170px;" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%
                                                                </span>
                                                                <span class="new">NEW
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="product-body">
                                                        <p class="product-category">HYGIENIC PRODUCTS
                                                        </p>
                                                        <h3 class="product-name header-cart-item-name">
                                                            <a href="#" tabindex="-1">SHAMPOO TRE'SEM'E
                                                            </a>
                                                        </h3>
                                                        <h4 class="product-price header-cart-item-info">PHP. 230
                                                            <del class="product-old-price">PHP. 220
                                                            </del>
                                                        </h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                            <i class="fa fa-star">
                                                            </i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="products-slick" data-nav="#slick-nav-1">
                                            </div>
                                        </div>
                                        <!-- /tab -->
                                    </div>


                                    <!-- Products tab & slick -->
                                </div>
                                <!-- /row -->

                                <!-- /container -->
                            </div>
                            <!-- partial -->
                        </div>

                </div>
                <span class="smalltri">

                    <i class="fa fa-star"></i>
                </span>
                </section>

            </div>
            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h6 style="font-weight: bold;">About</h6>
                            <p class="text-justify" style="color: white;font-size: 13px;"><i>GLORIOUS</i> is a shopping web application where the users can buy and add products in a simplier process. Users can also manage their profile information, update, delete data and add different products based on the suggested categories.
                                The word <i>glorious</i> comes from the word itself "having, worthy of, or bringing fame or admiration" to promote user's product into a simple business. The additional features on the web application is users can engage their customers relationship about their concerns and interest.
                            </p>
                        </div>

                        <div class="col-xs-6 col-md-3">
                            <h6>Categories</h6>
                            <ul class="footer-links">
                                <li><a href="#">Furniture</a></li>
                                <li><a href="#">Arts & Craft</a></li>
                                <li><a href="#">Automotive</a></li>
                                <li><a href="#">Beauty and Personal Care</a></li>
                                <li><a href="#">Books</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Computers</a></li>
                                <li><a href="#">Health & Household</a></li>
                                <li><a href="#">Industrial and Scientific</a></li>
                                <li><a href="#">Movies & TV</a></li>
                                <li><a href="#">Decoration</a></li>
                                <li><a href="#">Kitchen</a></li>
                                <li><a href="#">Electronic</a></li>
                                <li><a href="#">Other</a></li>
                            </ul>
                        </div>

                        <div class="col-xs-6 col-md-3">
                            <h6>Quick Links</h6>
                            <ul class="footer-links">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="inbox.php">Inbox</a></li>
                                <li><a href="products.php">Products</a></li>
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="profile.php">Profile</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
                                <a href="#"><b>Glorious</b></a>.
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <ul class="social-icons">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="./javascript/script.js"></script>
    <script>
        var time_in_minutes;
        if (localStorage.getItem("minute_count") != null) {
            time_in_minutes = localStorage.getItem("minute_count");
        } else {
            time_in_minutes = 300;
        }


        var current_time = Date.parse(new Date());
        var deadline = new Date(current_time + time_in_minutes * 60 * 1000);


        function time_remaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }

        function run_clock(hour, minute, second, endtime) {
            var h = document.getElementsByClassName(hour)[0];
            var m = document.getElementsByClassName(minute)[0];
            var s = document.getElementsByClassName(second)[0];

            function update_clock() {
                var t = time_remaining(endtime);
                h.innerHTML = t.hours;
                m.innerHTML = t.minutes;
                s.innerHTML = t.seconds;
                if (t.total <= 0) {

                    clearInterval(timeinterval);



                }

                let minute_count = (t.hours * 60) + t.minutes + (t.seconds / 60);
                // alert(minute_count);
                localStorage.setItem("minute_count", minute_count);


            }
            update_clock(); // run function once at first to avoid delay
            var timeinterval = setInterval(update_clock, 1000);
        }

        run_clock('hours', 'minutes', 'seconds', deadline);

        document.querySelector('.account-info').addEventListener('click', function(event) {
            if (document.querySelector('.header-menu').style.display == "none") {

                document.querySelector('.header-menu').style.display = "block";
            } else {
                document.querySelector('.header-menu').style.display = "none";
            }





        })
        document.querySelectorAll('.my-item-details').forEach((item) => {
            item.querySelector('.add-cart').addEventListener('click', function() {
                let quantity = item.querySelector('.input-quantity').value;
                const quantity2 = item.querySelector('.price-value').innerHTML;

                item.querySelector('.input-quantity').value = (parseInt(quantity, 10) + 1);
                item.querySelector('.piece-count').innerHTML = (parseInt(quantity, 10) * 1) + " piece/s";
                // const quan = parseInt(quantity2.substr(6), 10);
                // item.querySelector('.price-value').innerHTML = "Php. " + (quan * (parseInt(quantity, 10) + 1));
                // alert(parseInt(quantity2.substr(6), 10));

            });
            item.querySelector('.minus-cart').addEventListener('click', function() {
                let quantity = item.querySelector('.input-quantity').value;
                let quantity2 = item.querySelector('.price-value').innerHTML;

                if (item.querySelector('.input-quantity').value >= 1 && item.querySelector('.input-quantity').value >= 0) {
                    item.querySelector('.input-quantity').value = (parseInt(quantity, 10) - 1);
                    item.querySelector('.piece-count').innerHTML = (parseInt(quantity, 10) - 1) + " piece/s";
                    // item.querySelector('.price-value').innerHTML = "Php. " + (parseInt(quantity2.substr(5), 10) / parseInt(quantity, 10));
                }


            });

        });



        document.querySelector('#update_info').addEventListener('click', function(event) {
            var pass = document.querySelector('.password').value;
            var cpass = document.querySelector('.cpassword').value;
            // alert(pass);
            // alert(cpass);
            if (pass != cpass && (pass.length > 7 && cpass.length > 7)) {
                document.querySelector('.text-error').style.opacity = 1;
                event.preventDefault();
            }
            if (pass != cpass) {
                document.querySelector('.text-error').style.opacity = 1;
                event.preventDefault();
            }

        });




        document.querySelector('#add_product').addEventListener('click', function() {
            window.location.href = "add-product.php";

        });


        // Search content
        document.querySelector('#myInput').addEventListener('keypress', function(event) {
            if (event.key === "Enter") {

                var input, filter, products_row, product_name, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();

                products_row = document.querySelectorAll(".products-row");

                for (i = 0; i < products_row.length; i++) {
                    product_name = products_row[i].getElementsByClassName("product_name")[0];
                    txtValue = product_name.textContent || product_name.innerText;

                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        products_row[i].style.display = "";
                    } else {
                        products_row[i].style.display = "none";
                    }
                }
            }


        })


        document.querySelector('#myInput').addEventListener('keyup', function(event) {


            var input, filter, products_row, product_name, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();

            products_row = document.querySelectorAll(".products-row");

            for (i = 0; i < products_row.length; i++) {
                product_name = products_row[i].getElementsByClassName("product_name")[0];
                txtValue = product_name.textContent || product_name.innerText;

                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    products_row[i].style.display = "";
                } else {
                    products_row[i].style.display = "none";
                }
            }



        })


        document.querySelector('.account-info').addEventListener('click', function(event) {
            if (document.querySelector('.header-menu').style.display == "none") {

                document.querySelector('.header-menu').style.display = "block";
            } else {
                document.querySelector('.header-menu').style.display = "none";
            }





        })
    </script>
</body>

</html>