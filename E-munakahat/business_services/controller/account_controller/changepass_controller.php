<!-- Applicant view
START
1.	System will display applicant change password interface
2.	Applicant INPUT their applicant_ic
3.	Applicant INPUT their current account_password
4.	Applicant INPUT their new_password
5.	Applicant re-enter their new password “new_password1”
6.	Applicant click on the << Tukar kata laluan>> button
7.	IF (new_password == new_password1)
7.1	THEN System will display “kata laluan anda berjaya ditukar “
8.	ELSE
8.1	THEN System will display “kata laluan baru dan ulang kata laluan tidak sama” and will ask user to re-enter their passwords
END

Staff view
START
1.	System will display applicant change password interface
2.	Staff INPUT their staff_ic
3.	Staff INPUT their current account_password
4.	Staff INPUT their new_password
5.	Staff re-enter their new password “new_password1”
6.	Staff click on the << Tukar kata laluan>> button
7.	IF (new_password == new_password1)
7.1	THEN System will display “kata laluan anda berjaya ditukar “
8.	ELSE
8.1	THEN System will display “kata laluan baru dan ulang kata laluan tidak sama” and will ask user to re-enter their passwords
END -->

<?php
    if (isset($_POST['change']))
    {
        //tambah dalam database
        $applicant_ic = $_POST['applicant_ic'];
        $tempassword = $_POST['tempassword'];
        $newaccount_password = $_POST['newaccount_password'];

        if(empty($applicant_ic) || (empty($tempassword)) || (empty($newaccount_password)))
        {
            $alertMessage = "SILA ISI BORANG DENGAN LENGKAP.";
        } else {

            //or update kat account_password only?
            $facade->updatedForm($applicant_ic, $tempassword,$newaccount_password);
            $submitMessage = "Kata laluan anda telah berjaya ditukar!";
        }
    }

    if (isset($_POST['changestaff']))
    {
        //tambah dalam database
        $staff_ic = $_POST['staff_ic'];
        $tempassword = $_POST['tempassword'];
        $newaccount_password = $_POST['newaccount_password'];

        if(empty($staff_ic) || (empty($tempassword)) || (empty($newaccount_password)))
        {
            $alertMessage = "SILA ISI BORANG DENGAN LENGKAP.";
        } else {

            //or update kat account_password only?
            $facade->updatedForm($staff_ic, $tempassword,$newaccount_password);
            $submitMessage = "Kata laluan anda telah berjaya ditukar!";
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