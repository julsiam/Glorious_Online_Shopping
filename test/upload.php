<?php
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    $img_extension = array("jpg", "jpeg", "png", "svg");
    $img_path_lc = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));

    if (in_array($img_path_lc, $img_extension)) {
        $new_img_name = uniqid("IMG-", true) . '.' . $img_path_lc;
        $img_upload_path = 'uploads/' .  $new_img_name;
        move_uploaded_file($tmp_name,    $img_upload_path);
        echo pathinfo($img_name, PATHINFO_EXTENSION);
    }
    else{
        $err = "Must be an image file type!";
        header("location: test.php?error=$err");
    }
} else {
    $err = "Unknow error occurred!";
    header("location: test.php?error=$err");
}
