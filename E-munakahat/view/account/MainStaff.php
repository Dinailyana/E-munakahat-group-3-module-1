<?php
    include_once "/xampp/htdocs/dina/E-munakahat/template/templatestaff.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main interface staff</title>

    <style>
        .container{
            width:1000px;
            height: 600px;
            justify: center;
            position: relative;
            padding: 20px;
            /* margin: 20px; */
        }
        .linktepi{
            position: relative;
            justify-content: left;
            float: left;
            top: 0px;
            left: 1300px;
            padding: 10px;
        }
        .picture{
            padding:50px;
        }

    </style>
    
</head>
<body>
    <div class="container">

        <div class="linktepi">
            <a href="/dina/E-munakahat/view/changePassStaff.php"><small>TUKAR KATA LALUAN</small></a>
        </div>

        <div class="picture">
            <img src="/dina/E-munakahat/bangunanJAIP.png" alt="Bangunan JAIP" width="1330px" height="530px">
        </div>

    </div>
    
</body>
</html>

<?php
    include_once "/xampp/htdocs/dina/E-munakahat/template/footer.php";
?>