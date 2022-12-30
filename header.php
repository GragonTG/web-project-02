<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="bg-black container-fluid">
<div style="border: 1px; border-color: yellow; border-style: solid;" class="p-1 m-3 d-flex">
        <div class="col-12 row">
            <div class="col-10">


                <?php session_start();
                require "connection.php";

                if (isset($_SESSION["u"])) {

                    $data = $_SESSION["u"];

                    $image_rs = Database::search("SELECT * FROM `profile_img` WHERE `users_email`='" . $email . "'");
                    $image_details = $image_rs->fetch_assoc()
                ?>

                    <img src="<?php echo $data["fname"]; ?>" style="max-height: 70px;" class="rounded-circle mx-3" alt="">
                    <span style="font-family: monst; font-size: 20px;" class="text-white">Welcome,</span>
                    <span style="font-family: monst; font-size: 20px;" class="text-white"><?php echo $data["fname"]; ?> <?php echo $data["lname"]; ?></span>

                <?php
                } else {
                ?>
                    <img src="resources/newuser.svg" style="max-height: 70px;" class="rounded-circle mx-3" alt="">
                    <b onclick="location.href = 'studentlogin.php'" class="btn-warning btn">Please LogIn</b>



                <?php
                }
                ?>



            </div>
            <div class="col-2 justify-content-end align-content-center mt-3 mb-3 d-flex">
                <?php
                if (isset($_SESSION["u"])) {


                ?>

                    <b onclick="logout()" class="btn-warning btn">LogOut</b>

                <?php
                } else {
                ?>
                    <b onclick="location.href = 'studentlogin.php'" class="btn-warning btn">Please LogIn</b>



                <?php
                }
                ?>

            </div>
        </div>
    </div>
    
</body>
</html>