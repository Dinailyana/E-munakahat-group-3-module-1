<!-- START
Applicant interface
START
1.	System will display forgot password interface
2.	Applicant INPUT their applicant_ic
3.	Applicant INPUT their applicant_email
4.	System will give user their temporary password by their email
5.	User will be redirected to login interface
6.	Call login()
7.	Once user in their profile page, system will display message “Anda telah memasuki sistem menggunakan kata lauan sementara, sila tukar kata laluan anda”
STOP

Staff interface
START
1.	System will display staff forgot password interface
2.	Applicant INPUT their staff_ic
3.	Applicant INPUT their staff_email
4.	System will give user their temporary password by their email
5.	User will be redirected to staff login interface
6.	Call login()
7.	Once user in their profile page, system will display message “Anda telah memasuki sistem menggunakan kata lauan sementara, sila tukar kata laluan anda”
STOP -->

<?php
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

    if (isset($_POST['forgotstaff']))
    {
        $staff_ic = $_POST['staff_ic'];
        $staff_email = $_POST['staff_email'];

        if(empty($staff_ic) || (empty($staff_email)))
        {
            $alertMessage = "SILA ISI BORANG DENGAN LENGKAP.";
        } else {

            $facade->updatedForm($staff_ic, $staff_email);
            $submitMessage = "Kata laluan sementara telah berjaya dihantar.\nSila periksa e-mel anda!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>