<!-- START
1.	System display registration form
2.	Applicant INPUT applicant_ic
3.	Applicant INPUT applicant_name
4.	Applicant INPUT applicant_gender
5.	Applicant INPUT applicant_phone
6.	Applicant INPUT applicant_email
7.	Applicant INPUT applicant_ password
8.	Applicant click <<Daftar>> button
9.	IF the form is not fully filled
9.1	THEN The system display “Sila isi ruangan yang berkaitan” and ask user to enter their details before clicking the <<Daftar>> button again
10.	 IF the form is filled
10.1	THEN The system display “Berjaya Mendaftar”
11.	 All user data will be POST to database
12.	User will be redirected to Login interface
END -->

<?php
    if (isset($_POST['register']))
    {
        $applicant_ic = $_POST['applicant_ic'];
        $applicant_name = $_POST['applicant_name'];
        $applicant_gender = $_POST['applicant_gender'];
        $applicant_phone = $_POST['applicant_phone'];
        $applicant_email = $_POST['applicant_email'];
        $account_password = $_POST['account_password'];

        if(empty($applicant_ic) || (empty($applicant_name)) || (empty($applicant_gender))|| (empty($applicant_phone)) || (empty($applicant_email)) || (empty($account_password)))
        {
            $alertMessage = "SILA ISI BORANG DENGAN LENGKAP.";
        } else {

            $facade->updatedForm($applicant_ic, $applicant_name, $applicant_gender, $applicant_phone, $applicant_email, $account_password);
            $submitMessage = "Anda telah berjaya mendaftar akaun anda!";
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