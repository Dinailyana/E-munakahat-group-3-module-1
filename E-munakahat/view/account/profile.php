<?php
    include_once "/xampp/htdocs/dina/E-munakahat/template/templateUser.php";

    // require_once ('/xampp/htdocs/dina/E-munakahat/business_services/model/UserProfileRecord.php');
    // require_once ('/xampp/htdocs/dina/E-munakahat./business_services/controller/updateprofile_controller.php');
    // require_once ('/xampp/htdocs/dina/E-munakahat/business_services/controller/authentification_controller.php');
    // require_once ('/xampp/htdocs/dina/E-munakahat/facade.php');

    // $model= new UserProfileRecord();
    // $controller= new updateprofile_controller($model);
    // $controller= new authentification_controller($model);
    // $facade=new formFacade($controller);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile user</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
       
       .container{
            justify: center;
            position: relative;
       }

        /* CSS styles for the profile page */
        .profile {
            width: 300px;
            margin: 0 auto;
            padding: 100px;
            border: 1px solid #ddd;
        }

        .profile h2 {
            text-align: center;
        }

        .profile p {
            margin-bottom: 10px;
        }

        .profile .button {
            text-align: center;
            margin-top: 20px;
        }

        .profile .button a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
        }

        .profile input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .linktepi{
            position: relative;
            justify-content: left;
            float: left;
            top: 0px;
            left: 1300px;
            padding: 20px;
        }

        .logout{
            position: relative;
            justify-content: left;
            float: left;
            top: 0px;
            left: 1300px;
            padding: 20px;
        }


    </style>

</head>
<body>

    <div class="container">

    <!-- still on the side of the page -->
    <div class="linktepi">
        <a href="changepass.php"><small>TUKAR KATA LALUAN</small></a>
    </div>

    <div class="profile">
        <h2>Profil Pengguna</h2>
        <p><strong>No kad pengenalan :</strong> xxxxxxxxxxxxxxxxxx </p>
        <p><strong>Nama :</strong> abu bin ali </p>
        <p><strong>Jantina :</strong> lelaki</p>
        <p><strong>Phone:</strong> 012-3456789</p>
        <p><strong>Email:</strong> abu12@example.com</p>

        <input type="submit" value="kemaskini"  onclick="updated()">

    </div>

    <div class="logout">

    </div>
        <a href="login.php"><small>LOG KELUAR</small></a>
    </div>

    <script>
        //same problem with reguistration
        function updated() {
        alert("Profil anda telah berjaya dikemaskini!");
        }

    </script>
    
</body>
</html>

<?php
    include_once "/xampp/htdocs/dina/E-munakahat/template/footer.php";
?>