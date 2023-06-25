<!-- ni part yang ada salah login tu

START
1.	The system will display the login interface
2.	User INPUT their applicant_ic
3.	FOR (i=0, i<3, i++) {
3.1	User INPUT their account_password
3.2	Get account_password from database
3.3	 IF account_password from database == account_password entered {
3.3.1	User click << Masuk >>
3.3.2	BREAK from for looping
3.3.3	THEN system will redirect user to their profile page 
3.4	}
3.5	 IF account_password from database =! account_password entered {
3.5.1	THEN the system will display “Wrong password” and ask user to enter their password again
3.5.2	IF (i==2) {
3.5.2.1	THEN system will ask user to click on <<Lupa kata laluan>> button
3.5.2.2	User will be redirected to forgot password interface
3.5.3	}
3.6	}
4.	}
END

Staff Interface
START
1.	The system will display the login interface
2.	User INPUT their staff_ic
3.	FOR (i=0, i<3, i++) {
3.1	User INPUT their account_password
3.2	Get account_password from database
3.3	 IF account_password from database == account_password entered {
3.3.1	User click << Masuk >>
3.3.2	BREAK from for looping
3.3.3	THEN system will redirect user to their main page 
3.4	}
3.5	 IF account_password from database =! account_password entered {
3.5.1	THEN the system will display “Wrong password” and ask user to enter their password again
3.5.2	IF (i==2) {
3.5.2.1	THEN system will ask user to click on <<Lupa kata laluan>> button
3.5.2.2	User will be redirected to forgot password interface
3.5.3	}
3.6	}
4.	}
END -->

<?php
     if (isset($_POST['login']))
     {
         $staff_ic = $_POST['staff_ic'];
         $account_password = $_POST['account_password'];
 
         if(empty($staff_ic) || (empty($account_password)))
         {
             $alertMessage = "SILA ISI BORANG DENGAN LENGKAP.";
         } else {
 
             $facade->updatedForm($staff_ic, $account_password);
             // $submitMessage = "Anda telah berjaya mendaftar akaun anda!";
         }
     }

     if (isset($_POST['login']))
    {
        $applicant_ic = $_POST['applicant_ic'];
        $account_password = $_POST['account_password'];

        if(empty($applicant_ic) || (empty($account_password)))
        {
            $alertMessage = "SILA ISI BORANG DENGAN LENGKAP.";
        } else {

            $facade->updatedForm($applicant_ic, $account_password);
            // $submitMessage = "Anda telah berjaya mendaftar akaun anda!";
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