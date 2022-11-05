<?php
include("database.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glorious - Inbox</title>
    <link rel="icon" type="image/x-icon" href="src/favicon.PNG">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/style.css">


    <style>
        .filter-emails .emails-list {
            transition: 0.2s all;
            cursor: pointer;
        }

        .filter-emails .emails-list:hover {
            background-color: #2869ff1a;
            color: black;
        }

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
                    <li class="sidebar-list-item active">
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

        <div style="padding:30px">
            <div class="container" style="background-color: white;padding:30px;border-radius: 4px;width:100%;height:450px">
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" style="background-color: black;" data-toggle="dropdown">
                                EMail Adress <span class="caret"></span>
                            </button>
                            <!-- <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Mail</a></li>
                                <li><a href="#">Contacts</a></li>
                                <li><a href="#">Tasks</a></li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">
                                <div class="checkbox" style="margin: 0;">
                                    <label>
                                        <input type="checkbox" id="case">
                                    </label>
                                </div>
                            </button>
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">All</a></li>
                                <li><a href="#">None</a></li>
                                <li><a href="#">Read</a></li>
                                <li><a href="#">Unread</a></li>
                                <li><a href="#">Starred</a></li>
                                <li><a href="#">Unstarred</a></li>
                            </ul>
                        </div>
                        <a href="inbox.php"> <button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
                                <span class="glyphicon glyphicon-refresh"></span>   </button></a>

                        <!-- Single button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                More <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Mark all as read</a></li>
                                <li class="divider"></li>
                                <li class="text-center"><small class="text-muted">Select messages to see more actions</small></li>
                            </ul>
                        </div>
                        <div class="pull-right">
                            <span class="text-muted"><b>1</b>–<b>50</b> of <b>50</b></span>
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-default">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </button>
                                <button type="button" class="btn btn-default">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row ">
                    <div class="col-sm-3 col-md-2">
                        <a href="#" class="btn btn-sm btn-block send-message-primary" style="background-color: #2869ff;font-weight: normal;color:white" role="button">SEND MESSAGE</a>
                        <hr />
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active inbox-btn"><a href="#" style="background-color: #2869ff;"><span class="badge pull-right">42</span> Receive </a>
                            </li>
                            <li><a href="# " class="sent-btn">Sent Messages</a></li>
                            <li><a href="# " class="drafts-btn"><span class="badge pull-right">3</span>Drafts</a></li>
                        </ul>


                    </div>
                    <div class="col-sm-9 col-md-10 row-1-message">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                                    </span>Receive Messages</a></li>


                        </ul>
                        <!-- Tab panes -->

                        <div class="tab-content" style="height:300px;overflow-y: auto;">
                            <div class="tab-pane fade in active" id="home">
                                <div class="list-group">
                                    <?php
                                    $chat_array = array();
                                    $count = 0;
                                    $chat_name = $mysqli->query("SELECT profile_information.name FROM profile_information
                                      INNER JOIN inbox_details ON inbox_details.user2_id = profile_information.id
                                      WHERE inbox_details.user1_id = '$id'");

                                    foreach ($chat_name as $name) {
                                        array_push($chat_array, $name['name']);
                                    }

                                    //    print_r($chat_array);

                                    $messages = $mysqli->query("SELECT
                                    *
                                FROM
                                    messages
                                INNER JOIN inbox_details ON messages.user_id = inbox_details.user1_id AND inbox_details.id = messages.inbox_id
                                INNER JOIN profile_information ON profile_information.id = inbox_details.user1_id
                                WHERE
                                    inbox_details.user1_id != '$id' AND inbox_details.user2_id = '$id'
                               
                                ORDER BY
                                    messages.date_created DESC");

                                    //                                     $messages = $mysqli->query("SELECT messages.data FROM `messages` 
                                    // INNER JOIN `inbox_details` ON inbox_details.id = messages.inbox_id
                                    // INNER JOIN `profile_information` ON profile_information.id = inbox_details.user1_id
                                    // WHERE profile_information.id = '$id' AND messages.user_id != '$id'
                                    // GROUP BY inbox_details.id
                                    // ORDER BY messages.date_created ASC");




                                    foreach ($messages as $data) { ?>

                                        <a href="#" class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                            <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                                      display: inline-block;"><b><?= $data['name']  ?></b> </span> <span class=""> - <?= $data['data'] ?></span>
                                            </span>
                                        </a>

                                        <?php $count++; ?>
                                    <?php }
                                    ?>


                                </div>
                            </div>
                            <div class="tab-pane fade in" id="profile">
                                <div class="list-group">
                                    <div class="list-group-item">
                                        <span class="text-center">This tab is empty.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade in" id="messages">
                                ...</div>
                            <div class="tab-pane fade in" id="settings">
                                This tab is empty.</div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-10 row-2-message" style="display: none;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                                    </span>Sent Messages</a></li>


                        </ul>
                        <!-- Tab panes -->

                        <div class="tab-content" style="height:300px;overflow-y: auto;">
                            <div class="tab-pane fade in active" id="home">
                                <div class="list-group">
                                    <?php
                                    $name_array = array();
                                    $count = 0;



                                    $receiver = $mysqli->query("SELECT
                                    *
                                FROM
                                    messages
                                INNER JOIN inbox_details ON messages.user_id = inbox_details.user1_id AND inbox_details.id = messages.inbox_id
                                INNER JOIN profile_information  ON profile_information.id = inbox_details.user2_id 
                                WHERE
                                    inbox_details.user1_id = '$id' AND inbox_details.user2_id != '$id'
                                ORDER BY
                                    messages.date_created
                                DESC
                                    ");

                                    foreach ($receiver as $data) {
                                        array_push($name_array,  $data['name']);
                                    }

                                    // print_r($chat_array);

                                    $messages = $mysqli->query("SELECT
                                        *
                                        FROM
                                        messages
                                        INNER JOIN inbox_details ON messages.user_id = inbox_details.user1_id AND inbox_details.id = messages.inbox_id
                                        INNER JOIN profile_information ON profile_information.id = inbox_details.user1_id
                                        WHERE
                                        inbox_details.user1_id = '$id' AND inbox_details.user2_id != '$id'
                                        ORDER BY
                                        messages.date_created
                                        DESC
                                        ");

                                    // $messages = $mysqli->query("SELECT messages.data FROM `messages`
                                    // INNER JOIN `inbox_details` ON inbox_details.id = messages.inbox_id
                                    // INNER JOIN `profile_information` ON profile_information.id = inbox_details.user1_id
                                    // WHERE profile_information.id = '$id' AND messages.user_id != '$id'
                                    // GROUP BY inbox_details.id
                                    // ORDER BY messages.date_created ASC");




                                    foreach ($messages as $data) { ?>


                                        <a href="#" class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                            <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                                      display: inline-block;"><b>From: <?= $data['name']  ?></b> </span> <span class=""> <br><br>- <?= $data['data'] ?> </span><br>
                                            <span style="line-height: 30px;"><b>To: <i><?= $name_array[$count] ?></i></b></span>
                                            </span>
                                        </a>

                                        <?php $count++; ?>
                                    <?php }
                                    ?>


                                </div>
                            </div>
                            <div class="tab-pane fade in" id="profile">
                                <div class="list-group">
                                    <div class="list-group-item">
                                        <span class="text-center">This tab is empty.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade in" id="messages">
                                ...</div>
                            <div class="tab-pane fade in" id="settings">
                                This tab is empty.</div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-10 row-3-message" style="display: none;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                                    </span>Draft Messages</a></li>


                        </ul>
                        <!-- Tab panes -->

                        <div class="tab-content" style="height:300px;overflow-y: auto;">
                            <div class="tab-pane fade in active" id="home">
                                <div class="list-group">
                                    <?php
                                    $chat_array = array();
                                    $count = 0;
                                    $chat_name = $mysqli->query("SELECT profile_information.name FROM profile_information
                                      INNER JOIN inbox_details ON inbox_details.user2_id = profile_information.id
                                      WHERE inbox_details.user1_id = '$id'");

                                    foreach ($chat_name as $name) {
                                        array_push($chat_array, $name['name']);
                                    }

                                    //    print_r($chat_array);

                                    $messages = $mysqli->query("SELECT
                                    *
                                FROM
                                    messages
                                INNER JOIN inbox_details ON messages.user_id = inbox_details.user1_id AND inbox_details.id = messages.inbox_id
                                INNER JOIN profile_information ON profile_information.id = inbox_details.user1_id
                                WHERE
                                    inbox_details.user1_id != '$id' AND inbox_details.user2_id = '$id'
                               
                                ORDER BY
                                    messages.date_created DESC");

                                    //                                     $messages = $mysqli->query("SELECT messages.data FROM `messages` 
                                    // INNER JOIN `inbox_details` ON inbox_details.id = messages.inbox_id
                                    // INNER JOIN `profile_information` ON profile_information.id = inbox_details.user1_id
                                    // WHERE profile_information.id = '$id' AND messages.user_id != '$id'
                                    // GROUP BY inbox_details.id
                                    // ORDER BY messages.date_created ASC");




                                    foreach ($messages as $data) { ?>

                                        <a href="#" class="list-group-item" style="display: none;">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                            <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                                      display: inline-block;"><?= $data['name']  ?> </span> <span class=""> - <?= $data['data'] ?></span>
                                            </span>
                                        </a>

                                        <?php $count++; ?>
                                    <?php }
                                    ?>
                                    <div style="text-align: center;padding:20px">
                                        <p><b> This tab is empty.</b></p>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade in" id="profile">
                                <div class="list-group">
                                    <div class="list-group-item">
                                        <span class="text-center">This tab is empty.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade in" id="messages">
                                ...</div>
                            <div class="tab-pane fade in" id="settings">
                                This tab is empty.</div>
                        </div>
                    </div>

                </div>
                <p>Sign as: <b> <?php


                                $name = $mysqli->query("SELECT email FROM profile_information WHERE id = '$id'");
                                foreach ($name as $info) {
                                    echo $info['email'];
                                }
                                ?></b></p>
            </div>
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

    <form action="add-process.php" method="post" class="send-message-pane" style="display:none;position: fixed; transform: translate(50%,-50%);top:50%;right:50%;background-color: white;
    width:500px;height:500px;border-radius: 4px;padding:20px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    ">
        <h2>Send Message</h1>
            <br>
            <div>
                <label for="email">To Email Address: </label>
                <input required class="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" id="email" type="text" style="width: 80%;padding:5px;font-weight: bold;
            border:2px solid rgba(0,0,0,0.8);">
            </div>
            <br>
            <label for="message-content">Provide a Message: </label>
            <textarea required name="message-content" id="" cols="" rows="10" style="width:100%;resize: none;padding:10px;font-weight: bold;border:2px solid rgba(0,0,0,0.5);"></textarea>
            <br>
            <br>
            <button class="app-content-headerButton cancel-message-pane" name="cancel-message-pane" id="cancel-message-pane">Cancel</button>
            <button class="app-content-headerButton send-message" name="send-message" id="send-message">Send</button>
    </form>

    <div class="filter-emails" style="display:none;position: fixed; transform: translate(50%,-50%);top:60%;right:52%;background-color: white;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    width:400px;height:300px;padding:20px 0px 20px 0px;border-radius: 4px;overflow-y: auto;">

        <?php
        $emails = $mysqli->query("SELECT * FROM `profile_information` WHERE id != '$id'");

        foreach ($emails as $email) { ?>
            <div class="emails-list" style="display: flex;justify-content: left;align-items: center;gap:10px;padding:10px 20px 10px 20px;
                ">

                <?php
                if ($email['profile_image'] == NULL || $email['profile_image'] == "") {
                ?>
                    <img style="width:50px;height:50px;border-radius: 50%;" src="data:image/png;base64,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" alt="">
                <?php } else { ?>
                    <img style="width:50px;height:50px;border-radius: 50%;" src="test/uploads/<?= $email['profile_image'] ?>" alt="">
                <?php }
                ?>

                <div>
                    <span style="font-weight: bold;"><?= $email['name'] ?></span><br>
                    <small><?= $email['email'] ?></small>
                </div>

            </div>
        <?php }
        ?>





    </div>


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


        document.querySelector('.inbox-btn').addEventListener('click', function(event) {
            document.querySelector('.row-1-message').style.display = "block";
            document.querySelector('.row-2-message').style.display = "none";
            document.querySelector('.row-3-message').style.display = "none";


        })
        document.querySelector('.sent-btn').addEventListener('click', function(event) {
            document.querySelector('.row-1-message').style.display = "none";
            document.querySelector('.row-2-message').style.display = "block";
            document.querySelector('.row-3-message').style.display = "none";


        })
        document.querySelector('.drafts-btn').addEventListener('click', function(event) {
            document.querySelector('.row-1-message').style.display = "none";
            document.querySelector('.row-2-message').style.display = "none";
            document.querySelector('.row-3-message').style.display = "block";

        })

        document.querySelector('.account-info').addEventListener('click', function(event) {
            if (document.querySelector('.header-menu').style.display == "none") {

                document.querySelector('.header-menu').style.display = "block";
            } else {
                document.querySelector('.header-menu').style.display = "none";
            }
        })
        document.querySelectorAll('.emails-list').forEach((item) => {
            item.addEventListener('click', function() {
                const email_target = item.getElementsByTagName('small')[0].innerHTML;
                // alert(email_target);
                document.querySelector('.send-message-pane input').value = email_target;
                document.querySelector('.filter-emails').style.display = "none";

            });

        });

        document.querySelector('.send-message-pane').addEventListener('click', function(event) {
            if (event.target.className == "email") {
                document.querySelector('.filter-emails').style.display = "block";

            } else {
                document.querySelector('.filter-emails').style.display = "none";
            }

        });

        document.querySelector('.send-message-pane input').addEventListener('keyup', function() {

            var input = document.querySelector('.send-message-pane input');
            var filter = input.value.toUpperCase();

            var emails_list = document.querySelectorAll('.emails-list');
            // alert(emails_list.length);
            for (i = 0; i < emails_list.length; i++) {
                var name = emails_list[i].getElementsByTagName('span')[0];
                var email = emails_list[i].getElementsByTagName('small')[0];
                var txtValue = email.textContent || email.innerText || name.innerText || name.textContent;

                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    emails_list[i].style.display = "flex";
                } else {
                    emails_list[i].style.display = "none";
                }
            }



        })

        document.querySelector('.send-message-primary').addEventListener('click', function() {

            document.querySelector('.send-message-pane').style.display = "block";
        });
        document.querySelector('#cancel-message-pane').addEventListener('click', function(event) {
            event.preventDefault();
            document.querySelector('.send-message-pane').style.display = "none";
        });


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
    </script>
</body>

</html>