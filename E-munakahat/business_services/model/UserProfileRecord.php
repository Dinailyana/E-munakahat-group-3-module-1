<?php

require_once 'Connection.php';
class UserProfileRecord
{


    //from registration
    public function insertprofiledata()
    {
        //Create an instance of the DatabaseConnection class
        $dbConnection = new DatabaseConnection('localhost', 'emunakahat', 'root', '');
        $mysqli = $dbConnection->getMysqli();

        try
        {
            $mysqli->autocommit(false);
            $sql1=" INSERT INTO applicant(applicant_ic, applicant_name, applicant_gender, applicant_phone, applicant_email) VALUES (?, ?, ?, ?, ?)"
            $stmt1 = $mysqli->prepare($sql1);
            $stmt1->bind_param("sssis", $applicant_ic, $applicant_name, $applicant_gender, $applicant_phone, $applicant_email);
            $stmt1->execute();

            $sql2="  INSERT INTO account(account_password) VALUES(?)"
            $stmt2 = $mysqli->prepare($sql2);
            $stmt2->bind_param("sssis", $account_password);
            $stmt2->execute();

            $mysqli->commit();

            echo "Data inserted successfully!";
        }
        catch (Exception $e) 
        {
            $mysqli->rollback();
            die("Error inserting data: " . $e->getMessage());
        } 
        finally 
        {
            $mysqli->autocommit(true);
        }

        $dbConnection->close()

     }

    //list of applicant that will be display
    public function viewapplicant()
    {
        //Create an instance of the DatabaseConnection class
        $dbConnection = new DatabaseConnection('localhost', 'emunakahat', 'root', '');
        $mysqli = $dbConnection->getMysqli();

        try {
            // $sql = "SELECT p.*, a.* FROM partner p LEFT JOIN applicant a ON p.partner_ic = a.partner_ic";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0)
            {
                $data = $result->fetch_all(MYSQLI_ASSOC);

                return $data;
            } 
            else 
            {
                return [];
            }
        } 
        catch (Exception $e)
        {
            die("Error retrieving data: " . $e->getMessage());
        } 
        finally 
        {
            $dbConnection->close();
        }

    }

    //update profile in database
    public function updateprofile()
    {
        //Create an instance of the DatabaseConnection class
        $dbConnection = new DatabaseConnection('localhost', 'emunakahat', 'root', '');
        $mysqli = $dbConnection->getMysqli();

        try
        {
            $mysqli->autocommit(false);

        }

    }

    public function changepassword()
    {
        //Create an instance of the DatabaseConnection class
        $dbConnection = new DatabaseConnection('localhost', 'emunakahat', 'root', '');
        $mysqli = $dbConnection->getMysqli();

    }

    public function forgotpassword()
    {
        //Create an instance of the DatabaseConnection class
        $dbConnection = new DatabaseConnection('localhost', 'emunakahat', 'root', '');
        $mysqli = $dbConnection->getMysqli();

    }
}

?>