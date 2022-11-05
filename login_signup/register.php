<?php
require 'config.php';
session_start();
// if (!empty($_SESSION["id"])) {
//    header("Location: index.php");
// }
if (isset($_POST["submit"])) {
   $name = $_POST["name"];
   $email = $_POST["email"];
   $age = $_POST["age"];
   $phone = $_POST["phone"];
   $location = $_POST["location"];
   $password = $_POST["password"];
   $cpassword = $_POST["cpassword"];
   $duplicate = mysqli_query($conn, "SELECT * FROM profile_information WHERE name = '$name' OR email = '$email'");

   if (mysqli_num_rows($duplicate) > 0) {
      $error[] = 'Username or Email Has Already Taken';
   } else {
      if ($password == $cpassword) {
         $query = "INSERT INTO profile_information(`id`, `name`, `age`, `phone`, `password`, `email`, `location`, `date_joined`) VALUES(NULL, '$name', '$age', '$phone', '$password' ,'$email', '$location', NULL)";
         mysqli_query($conn, $query);
         header("Location: login.php");
      } else {
         $error[] = 'Password does not Match';
      }
   }
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Glorious - Sign up</title>
   <link rel="stylesheet" href="./css/style.css">
   <link rel="icon" type="image/x-icon" href="../src/favicon.PNG">

</head>

<body style=" background: #101827;">
   <div class="form form-register" style="background:#FFFFFF">
      <div class="tab-content">
         <div id="signin">
            <h1 style="text-align: center;"><svg width="150" height="150" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z" />
               </svg><br><b style="position: relative;top:-20px">GLORIOUS</b></h1>

            <form class="" action="" method="post" autocomplete="off">
               <div class="field-wrap">
                  <label style="font-size: 14px;">
                     Name<span class="req">*</span>
                  </label style="font-size: 14px;">
                  <input placeholder="ex: Keenan Paul Mendiola" style="background:#FFFFFF" minlength="2" maxlength="25" name="name" type="text" required autocomplete="off" />

               </div>
               <div class="field-wrap">
                  <label style="font-size: 14px;">
                     Age<span class="req">*</span>
                  </label style="font-size: 14px;">
                  <input placeholder="ex: 31"  style="background:#FFFFFF" minlength="2" maxlength="25" name="age" type="number" required autocomplete="off" />

               </div>
               <div class="field-wrap">
                  <label style="font-size: 14px;">
                     Phone number<span class="req">*</span>
                  </label style="font-size: 14px;">
                  <input style="background:#FFFFFF" placeholder="ex: 09567845632" minlength="11" maxlength="11" name="phone" type="text" required autocomplete="off" />

               </div>
               <div class="field-wrap">
                  <label style="font-size: 14px;">
                     Location<span class="req">*</span>
                  </label style="font-size: 14px;">
                  <input style="background:#FFFFFF" placeholder="ex: Cebu City" minlength="2" maxlength="25" name="location" type="text" required autocomplete="off" />

               </div>
               <div class="field-wrap">
                  <label style="font-size: 14px;">
                     Email Address<span class="req">*</span>
                  </label style="font-size: 14px;">
                  <input style="background:#FFFFFF" placeholder="ex: keenanpaulmendiola@gmail.com" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required autocomplete="off" />
               </div>

               <div class="field-wrap">
                  <label style="font-size: 14px;">
                     Password<span class="req">*</span>
                  </label style="font-size: 14px;">
                  <input style="background:#FFFFFF" placeholder="Type your password" minlength="8" name="password" type="password" value="" required autocomplete="off" />

               </div>

               <div class="field-wrap">
                  <label style="font-size: 14px;">
                     Confirm Password<span class="req">*</span>
                  </label style="font-size: 14px;">
                  <input style="background:#FFFFFF" placeholder="Confirm your password" minlength="8" name="cpassword" type="password" value="" required autocomplete="off" /><br>
                  <?php
                  if (isset($error)) {
                     foreach ($error as $error) {
                        echo '<span style ="color: red; margin-left: 15px;text-align:center">' . $error . '</span>';
                     };
                  };
                  ?>
               </div>
               <div class="field-wrap" style="text-align: center;">
                  <input type="submit" name="submit" value="Sign Up" class="button button-block">
                  <!-- <button type="submit" class="button button-block" name="submit">Sign Up</button> -->
                  <a style="color:#2869ff;font-size: 13px;" href="login.php">Already have an account? Sign in</a>
               </div>

            </form>
         </div>
      </div>
   </div>

</body>

</html>