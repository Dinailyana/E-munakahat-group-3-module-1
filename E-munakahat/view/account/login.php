<?php
    //require_once ('/xampp/htdocs/dina/E-munakahat/business_services/model/UserProfileRecord.php');
    require_once ('/xampp/htdocs/dina/E-munakahat/business_services/controller/login_controller.php');
    // require_once ('/xampp/htdocs/dina/E-munakahat/business_services/controller/authentification_controller.php');
    // require_once ('/xampp/htdocs/dina/E-munakahat/facade.php');

    // $model= new UserProfileRecord();
    // $controller= new login_controller($model);
    // $controller= new authentification_controller($model);
    // $facade=new formFacade($controller);

    // if (isset($_POST['login']))
    // {
    //     $applicant_ic = $_POST['applicant_ic'];
    //     $account_password = $_POST['account_password'];

    //     if(empty($applicant_ic) || (empty($account_password)))
    //     {
    //         $alertMessage = "SILA ISI BORANG DENGAN LENGKAP.";
    //     } else {

    //         $facade->updatedForm($applicant_ic, $account_password);
    //         // $submitMessage = "Anda telah berjaya mendaftar akaun anda!";
    //     }
    // }

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login user</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    

    <style>
        .container{
            background-color:#cfe2f3;
        }

        .title{
            padding: 10px;
            font-family:"lucida console", monospace;
            background-color: #16537e;
            color:#f2f2f2;
        }

        
        /* CSS styles for the navigation bar */
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 26px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* CSS styles for the footer */
        .footer {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        /* CSS styles for the login form */
        .login-form {
            width: 300px;
            margin: 0 auto;
            padding: 100px;
            border: 1px solid #ddd;
            background-color:#ddd;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .staff{
            float:left;
        }

    </style>

</head>
<body>
    <div class="title">
        <h1>e-Munakahat</h1>
        <h2>SISTEM MAKLUMAT PERKAHWINAN PAHANG</H2>
    </div>

    <div class="navbar">
        <a href="#">Laman utama</a>
        <a href="#">Perkahwinan</a>
        <a href="#">Perceraian</a>
        <a href="#">Ruju'</a>
        <a href="#">Panduan Pengguna</a>
    </div>

    <div class="container">
    <div class="login-form">
        <h2>Log masuk</h2>
        <form action="login.php" method="POST">
            <p>No kad pengenalan : </p>
            <input type="text" name="applicant_ic" placeholder="No kad pengenalan" required>
            <p>Kata lauan : </p>
            <input type="password" name="account_password" placeholder="Kata Laluan" required>

            <div class="forgetpass">
                <a href="/dina/E-munakahat/view/forgotpass.php">Lupa kata laluan</a>
            </div>
            <br>
            <input type="submit" name="login" value="masuk">

            <br>
            <div class="staff">
                <br>
                <a href="/dina/E-munakahat/view/loginstaff.php">Log masuk kakitangan</a>
            </div>
        </form>
    </div>
    </div>

    <div class="footer">
        <p>&copy; 2023 e-MUunakahat system. All rights reserved.</p>
    </div>
</body>
</html>