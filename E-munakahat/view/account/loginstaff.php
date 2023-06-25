<?php
    include_once "/xampp/htdocs/dina/E-munakahat/template/templatestaff.php";

    // require_once ('/xampp/htdocs/dina/E-munakahat/business_services/model/UserProfileRecord.php');
    require_once ('/xampp/htdocs/dina/E-munakahat/business_services/controller/login_controller.php');
    // require_once ('/xampp/htdocs/dina/E-munakahat/business_services/controller/authentification_controller.php');
    // require_once ('/xampp/htdocs/dina/E-munakahat/facade.php');

    // $model= new UserProfileRecord();
    // $controller= new login_controller($model);
    // $controller= new authentification_controller($model);
    // $facade=new formFacade($controller);

    // if (isset($_POST['login']))
    // {
    //     $staff_ic = $_POST['staff_ic'];
    //     $account_password = $_POST['account_password'];

    //     if(empty($staff_ic) || (empty($account_password)))
    //     {
    //         $alertMessage = "SILA ISI BORANG DENGAN LENGKAP.";
    //     } else {

    //         $facade->updatedForm($staff_ic, $account_password);
    //         // $submitMessage = "Anda telah berjaya mendaftar akaun anda!";
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login staff</title>

    <style>
        /* CSS styles for the forgot password form */
        .login-formstaff {
            width: 300px;
            margin: 0 auto;
            padding: 100px;
            border: 1px solid #ddd;
            background-color:#ddd;
        }

        .login-formstaff input[type="text"],
        .login-formstaff input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        .login-formstaff input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<div class="container">
    <div class="login-formstaff">
    <!-- <i class="fas fa-profile"></i> -->
        <h2>Log masuk</h2>
        <form action="login.php" method="POST">
            <p>No kad pengenalan : </p>
            <input type="text" name="staff_ic" placeholder="No kad pengenalan" required>
            <p>Kata lauan : </p>
            <input type="password" name="account_password" placeholder="Kata Laluan" required>

            <div class="forgetpass">
                <a href="/dina/E-munakahat/view/forgotPassStaff.php">Lupa kata laluan</a>
            </div>
            <br>
            <input type="submit" value="masuk">

            <br>
        </form>
    </div>
    </div>
<body>
    
</body>
</html>

<?php
    include_once "/xampp/htdocs/dina/E-munakahat/template/footer.php";
?>