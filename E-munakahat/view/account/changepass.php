<?php
    include_once "/xampp/htdocs/dina/E-munakahat/template/templateUser.php";

    //require_once ('/xampp/htdocs/dina/E-munakahat/business_services/model/UserProfileRecord.php');
    require_once ('/xampp/htdocs/dina/E-munakahat/business_services/controller/changepass_controller.php');
    //require_once ('/xampp/htdocs/dina/E-munakahat/business_services/controller/authentification_controller.php');
    //require_once ('/xampp/htdocs/dina/E-munakahat/facade.php');

    // $model= new UserProfileRecord();
    // $controller= new changepass_controller($model);
    // $controller= new authentification_controller($model);
    // $facade=new formFacade($controller);

    // if (isset($_POST['change']))
    // {
    //     //tambah dalam database
    //     $applicant_ic = $_POST['applicant_ic'];
    //     $tempassword = $_POST['tempassword'];
    //     $newaccount_password = $_POST['newaccount_password'];

    //     if(empty($applicant_ic) || (empty($tempassword)) || (empty($newaccount_password)))
    //     {
    //         $alertMessage = "SILA ISI BORANG DENGAN LENGKAP.";
    //     } else {

    //         //or update kat account_password only?
    //         $facade->updatedForm($applicant_ic, $tempassword,$newaccount_password);
    //         $submitMessage = "Kata laluan anda telah berjaya ditukar!";
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change password</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>

        /* CSS styles for the form */
       .changepass {
            width: 300px;
            margin: 0 auto;
            padding: 100px;
            border: 1px solid #ddd;
        }

        .changepass input[type="text"],
        .changepass input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        .changepass input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .back{
            position: relative;
            top:30px;
            float: left;
        }


    </style>

</head>
<body>

    <div class="changepass">
        <h2>Tukar kata laluan</h2>
        <form action="changepass.php" method="POST">

            <p>No kad pengenalan : </p>
            <input type="text" name="applicant_ic" placeholder="No kad pengenalan" required>
            <p>Kata laluan semasa : </p>
            <input type="text" name="tempassword" placeholder="Kata laluan semasa" required>
            <p>Kata laluan baharu : </p>
            <input type="text" name="newaccount_password" placeholder="Kata laluan baharu" required>
            <p>Ulang kata laluan : </p>
            <input type="text" name="newaccount_password" placeholder="Ulang kata laluan" required>
            
            <input type="submit" name="change" value="Tukar kata laluan" onclick="changesuccess()">
            <br>
            <div class="back">
                <a href="profile.php">Kembali</a>
            </div>
            <br>
        </form>
    </div>

    <script>
        //same problem with reguistration
        function changesuccess() {
        alert("Kata laluan anda telah berjaya ditukar!");
        }
    </script>

</body>
</html>

<?php
    include_once "/xampp/htdocs/dina/E-munakahat/template/footer.php";
?>