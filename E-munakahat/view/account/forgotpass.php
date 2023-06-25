<?php
    include_once "/xampp/htdocs/dina/E-munakahat/template/templateUser.php";

    // require_once ('/xampp/htdocs/dina/E-munakahat/business_services/model/UserProfileRecord.php');
     require_once ('/xampp/htdocs/dina/E-munakahat/business_services/controller/forgotpass_controller.php');
    // require_once ('/xampp/htdocs/dina/E-munakahat/business_services/controller/authentification_controller.php');
    // require_once ('/xampp/htdocs/dina/E-munakahat/facade.php');

    // $model= new UserProfileRecord();
    // $controller= new forgotpass_controller($model);
    // $controller= new authentification_controller($model);
    // $facade=new formFacade($controller);

    if (isset($_POST['forgot']))
    {
        $applicant_ic = $_POST['applicant_ic'];
        $applicant_email = $_POST['applicant_email'];

        if(empty($applicant_ic) || (empty($applicant_email)))
        {
            $alertMessage = "SILA ISI BORANG DENGAN LENGKAP.";
        } else {

            $facade->updatedForm($applicant_ic, $applicant_email);
            $submitMessage = "Kata laluan sementara telah berjaya dihantar.\nSila periksa e-mel anda!";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgotpassword</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>

       /* CSS styles for the form */
       .forgotpass {
            width: 300px;
            margin: 0 auto;
            padding: 100px;
            border: 1px solid #ddd;
        }

        .forgotpass input[type="text"],
        .forgotpass input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        .forgotpass input[type="submit"] {
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
    <div class="forgotpass">
        <h2>Lupa kata laluan</h2>
        <form action="forgotpass.php" method="POST">
            <p>No kad pengenalan : </p>
            <input type="text" name="applicant_ic" placeholder="No kad pengenalan" required>
            <p>Emel : </p>
            <input type="text" name="applicant_email" placeholder="emel" required>
            <input type="submit" name="forgot" value="Hantar kata laluan" onclick="sendemail()">
            <br>
            <div class="back">
                <a href="login.php">Kembali</a>
            </div>
            <br>
        </form>
    </div>

    <script>
        //same problem with reguistration
        function sendemail() {
        alert("Kata laluan sementara telah berjaya dihantar.\nSila periksa e-mel anda!");
        }

    </script>

</body>
</html>

<?php
    include_once "/xampp/htdocs/dina/E-munakahat/template/footer.php";
?>