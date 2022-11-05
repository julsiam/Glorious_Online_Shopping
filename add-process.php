<?php
include("database.php");
session_start();
// $_SESSION['email'] = "joshua@gmail.com";
// $_email = $_SESSION['email'];
$email = $_SESSION['email'];
$ID = $mysqli->query("SELECT id FROM profile_information WHERE email = '$email'");
$id_ex = null;
foreach ($ID as $id) {
    $id_ex = $id['id'];
}


if (isset($_POST['submit']) && isset($_FILES['p_image'])) {


    $p_name = $_POST['p_name'];
    $p_info = $_POST['p_info'];
    $p_category = $_POST['p_category'];
    $p_status = $_POST['p_status'];
    $p_stock = $_POST['p_stock'];
    $p_price = $_POST['p_price'];


    $img_name = $_FILES['p_image']['name'];
    $img_size = $_FILES['p_image']['size'];
    $tmp_name = $_FILES['p_image']['tmp_name'];
    $error = $_FILES['p_image']['error'];

    $img_extension = array("jpg", "jpeg", "png", "svg");
    $img_path_lc = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));

    echo $img_path_lc;
    if (in_array($img_path_lc, $img_extension)) {
        $new_img_name = uniqid("IMG-", true) . '.' . $img_path_lc;
        $img_upload_path = 'test/uploads/' .  $new_img_name;

        // echo pathinfo($img_name, PATHINFO_EXTENSION);
        $insert = $mysqli->query("INSERT INTO `product_details`(`id`,`user_id`, `product_name`, `product_image`, `product_info`, `category`, `status`, `stock`, `price`,`date_added`)
         VALUES ('', '$id_ex' ,'$p_name', '$new_img_name', '$p_info' ,'$p_category','$p_status','$p_stock' , '$p_price',current_timestamp() )");

        if ($insert === TRUE) {
            move_uploaded_file($tmp_name, $img_upload_path);
            header("location: products.php");
        }
    } else {
        $err = "Must be an image file type!";
        echo $err;
        header("location: add-product.php?error=$err");
    }
}
//  else {
//     $err = "Unknow error occurred!";
//     echo $err;
//     header("location: add-product.php?error=$err");
// }


if (isset($_POST['update_info'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];


    $img_name = $_FILES['profile_image']['name'];
    $img_size = $_FILES['profile_image']['size'];
    $tmp_name = $_FILES['profile_image']['tmp_name'];
    $error = $_FILES['profile_image']['error'];

    $img_extension = array("jpg", "jpeg", "png", "svg", "webph", "");
    $img_path_lc = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));

    echo $img_path_lc;

    if (in_array($img_path_lc, $img_extension)) {

        $new_img_name = uniqid("IMG-", true) . '.' . $img_path_lc;
        $img_upload_path = 'test/uploads/' .  $new_img_name;

        if (isset($_FILES['profile_image'])) {
            // echo pathinfo($img_name, PATHINFO_EXTENSION);
            echo "<script>alert('$img_path_lc');</script>";
            if ($img_name == "") {
                $insert = $mysqli->query("UPDATE `profile_information` SET `name`='$name',`age`=' $age',`phone`='$phone',
            `password`='$password',`email`='$email',`location`='$location'
             WHERE id =  '$id'");
                if ($insert === TRUE) {


                    header("location: profile.php");
                }
            } else {
                $insert = $mysqli->query("UPDATE `profile_information` SET `name`='$name',`age`=' $age',`phone`='$phone',
                `password`='$password',`email`='$email',`location`='$location', `profile_image` = '$new_img_name'
                 WHERE id =  '$id'");
                if ($insert === TRUE) {
                    move_uploaded_file($tmp_name, $img_upload_path);

                    header("location: profile.php");
                }
            }
        } else {
            $insert = $mysqli->query("UPDATE `profile_information` SET `name`='$name',`age`=' $age',`phone`='$phone',
            `password`='$password',`email`='$email',`location`='$location'
             WHERE id =  '$id'");

            if ($insert === TRUE) {

                header("location: profile.php");
            }
        }
    } else {
        $err = "Must be an image file type!";
        // echo "<script>alert('$img_path_lc');</script>";
        // echo $err;
        header("location: profile.php?error=$err");
    }
}

if (isset($_POST['addcart'])) {
    $user_id = $_POST['user_id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $subtotal = $_POST['subtotal'];

    $insert = $mysqli->query("INSERT INTO `cart`(`id`, `user_id`, `product_id`, `quantity`, `subtotal`) 
    VALUES ('','$user_id','$product_id','$quantity','$subtotal')");

    if ($insert === TRUE) {

        header("location: cart.php");
    }
}

if (isset($_POST['p-delete-btn'])) {
    // echo "<script>alert('hello')</script>";

    $cart_id = $_POST['cart-id'];
    $insert = $mysqli->query("DELETE FROM `cart` WHERE id = '$cart_id'");
    if ($insert === TRUE) {

        header("location: cart.php");
    }
}

if (isset($_POST['save_primary'])) {
    // echo "<script>alert('hello')</script>";

    $cart_id = $_POST['cart-id'];
    $input_quantity = $_POST['input-quantity'];
    $initial_price = $_POST['initial-price'];
    $initial_subtotal =  $input_quantity * $initial_price;

    // echo "<script>alert($input_quantity)</script>";
    $insert = $mysqli->query("UPDATE `cart` SET `quantity`='$input_quantity',`subtotal`='$initial_subtotal' WHERE id = '$cart_id'");
    if ($insert === TRUE) {

        header("location: cart.php");
    }
}


if (isset($_POST['send-message'])) {
    // echo "<script>alert('hello')</script>";
    $id_ = $_SESSION['id'];
    $other_id = NULL;
    $email = $_POST['email'];
    $message_content = $Str = str_replace("'", '"', $_POST['message-content']);

    $chat_id = $mysqli->query("SELECT id FROM profile_information WHERE email = '$email'");
    foreach ($chat_id as $id) {
        $other_id = $id['id'];
        // echo "<script>alert('$id')</script>";
    }
    $all = $mysqli->query("SELECT * FROM `inbox_details`");
    $store1 = array();
    $store2 = array();

    foreach ($all as $one) {
        array_push($store1, $one['user1_id']);
        array_push($store2, $one['user2_id']);


        // echo "<script>alert('$id')</script>";
    }

    // print_r($store1);
    // echo "<br>" . $id_ . "<br>";
    // print_r($store2);
    // echo "<br>" . $other_id . "<br>";
    // // echo $id;

    if (array_search($id_, $store1) == array_search($other_id, $store2)) {
        $inbox = $mysqli->query("SELECT inbox_details.id FROM `inbox_details` WHERE inbox_details.user1_id = '$id_'
        AND inbox_details.user2_id = '$other_id'");
        // $inbox_id;
        foreach ($inbox as $i) {
            $inbox_id = $i['id'];
        }

        $insert1 = $mysqli->query("INSERT INTO `messages`( `inbox_id`, `user_id`, `data`) VALUES ('$inbox_id','$id_','$message_content')");
        if ($insert1 === TRUE) {
            // echo "<script>alert('naa')</script>";
            header("location: inbox.php");
        }
    } else {
        echo "<script>alert('wala')</script>";
        $count = $mysqli->query("SELECT COUNT(*) AS `count` FROM `inbox_details`");
        $c_ex = 0;
        foreach ($count as $i) {
            $c_ex = $i['count'] + 1;
            // echo "<script>alert('wala')</script>";
        }
        $insert1 = $mysqli->query("INSERT INTO `inbox_details`(`id`,`user1_id`, `user2_id`) 
        VALUES ('$c_ex','$id_','$other_id')");
        $insert2 = $mysqli->query("INSERT INTO `messages`( `inbox_id`, `user_id`, `data`) VALUES ('$c_ex','$id_','$message_content')");
        if ($insert1 === TRUE && $insert2 === TRUE) {
            header("location: inbox.php");
        }
    }
}


if (isset($_POST['update_product']) && isset($_FILES['p_image'])) {

    $p_id = $_POST['id'];
    $p_name = $_POST['p_name'];
    $p_info = $_POST['p_info'];
    $p_category = $_POST['p_category'];
    $p_status = $_POST['p_status'];
    $p_stock = $_POST['p_stock'];
    $p_price = $_POST['p_price'];


    $img_name = $_FILES['p_image']['name'];
    $img_size = $_FILES['p_image']['size'];
    $tmp_name = $_FILES['p_image']['tmp_name'];
    $error = $_FILES['p_image']['error'];

    $img_extension = array("jpg", "jpeg", "png", "svg", "webph", "");
    $img_path_lc = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
    echo $img_path_lc;
    if (in_array($img_path_lc, $img_extension)) {
        $new_img_name = uniqid("IMG-", true) . '.' . $img_path_lc;
        $img_upload_path = 'test/uploads/' .  $new_img_name;

        // echo pathinfo($img_name, PATHINFO_EXTENSION);
        $update = $mysqli->query("UPDATE product_details SET product_name='$p_name', product_image ='$new_img_name',
        product_info='$p_info', category='$p_category', status='$p_status', stock='$p_stock', price='$p_price', date_added=current_timestamp() WHERE id='$p_id'");

        if ($update === TRUE) {
            move_uploaded_file($tmp_name, $img_upload_path);
            header("location: products.php");
        }
    } else {
        $err = "Must be an image file type!";
        echo $err;
        header("location: products.php?error=$err");
    }
}



if (isset($_POST['delete_product'])) {
    $product_id = mysqli_real_escape_string($conn, $_POST['id']);

    $delete_query = "DELETE FROM product_details WHERE id='$product_id' ";
    $delete_query_run = mysqli_query($conn, $delete_query);


    if ($delete_query_run) {
        header("Location: products.php");
    } else {
        echo 500;
    }
}


// else {
//     header("Location: index.php");
// }
