<?php
    include_once "/xampp/htdocs/dina/E-munakahat/template/templateUser.php";

    // require_once ('/xampp/htdocs/dina/E-munakahat/business_services/model/UserProfileRecord.php');
     require_once ('/xampp/htdocs/dina/E-munakahat/business_services/controller/registration_controller.php');
    // require_once ('/xampp/htdocs/dina/E-munakahat/facade.php');

    // $model= new UserProfileRecord();
    // $controller= new registration_controller($model);
    // $facade=new formFacade($controller);

    // if (isset($_POST['register']))
    // {
    //     $applicant_ic = $_POST['applicant_ic'];
    //     $applicant_name = $_POST['applicant_name'];
    //     $applicant_gender = $_POST['applicant_gender'];
    //     $applicant_phone = $_POST['applicant_phone'];
    //     $applicant_email = $_POST['applicant_email'];
    //     $account_password = $_POST['account_password'];

    //     if(empty($applicant_ic) || (empty($applicant_name)) || (empty($applicant_gender))|| (empty($applicant_phone)) || (empty($applicant_email)) || (empty($account_password)))
    //     {
    //         $alertMessage = "SILA ISI BORANG DENGAN LENGKAP.";
    //     } else {

    //         $facade->updatedForm($applicant_ic, $applicant_name, $applicant_gender, $applicant_phone, $applicant_email, $account_password);
    //         $submitMessage = "Anda telah berjaya mendaftar akaun anda!";
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

       /* CSS styles for the form */
       .registration {
            width: 300px;
            margin: 0 auto;
            padding: 100px;
            border: 1px solid #ddd;
        }

        .registration input[type="text"],
        .registration input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        .registration input[type="submit"] {
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
    
    <div class="registration">
        <h2>Daftar Pengguna</h2>
        <form action="registration.php" method="POST">
            <p>No kad pengenalan : </p>
            <input type="text" name="applicant_ic" placeholder="No kad pengenalan" required>
            <p>Nama : </p>
            <input type="text" name="applicant_name" placeholder="Nama" required>

            <br><br>
            <label for="applicant_gender">Jantina:</label>
            <select name="jantina" id="sex">
                <option value="null">Sila pilih satu</option>
                <option value="male">Lelaki</option>
                <option value="female">Perempuan</option>
            </select>
            <br><br>
            
            <p>No Telefon : </p>
            <input type="text" name="applicant_phone" placeholder="No Telefon" required>
            <p>Email : </p>
            <input type="text" name="applicant_email" placeholder="emel" required>
            <p>Kata laluan : </p>
            <input type="password" name="account_password" placeholder="Kata Laluan" required>
            <p>Ulang Kata lauan : </p>
            <input type="password" name="account_password" placeholder="Kata Laluan" required>
            <br>
            <!-- ------------------------------------------------------------- -->
            <input type="submit" name="register" value="Daftar pengguna" onclick="successful()">
            <br>
            <div class="back">
                <a href="login.php">Kembali</a>
            </div>
            <br>
        </form>
    </div>

    <script>
        // data belum isi but alert dah keluar???
        function successful() {
        alert("Anda telah berjaya mendaftar akaun anda!");
        }

    </script>

</body>
</html>

<?php
    include_once "/xampp/htdocs/dina/E-munakahat/template/footer.php";
?>