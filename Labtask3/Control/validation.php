<?php
    include('../control/db.php');

    $validateName="";
    $validateEmail="";
    $validateUserName="";
    $validatePassword="";
    $validateConfirmPassword="";
    $validateGender="";
    $validateDateOfBirth="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $userName = $_REQUEST['un'];
            $password = $_REQUEST['password'];
            $confirmPassword = $_REQUEST['confirmPassword'];
            $gender = $_REQUEST['gender'];
            $dob = $_REQUEST['birthday'];

            if(empty($name) || strlen($name)<5){
                $validateName="Please re-enter the name";
            }
            else{
                $validateName=$name;
            }
            if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)){
                $validateEmail="Please re-enter the email";
            }
            else{
                $validateEmail=$email;
            }
            if(empty($userName) || !preg_match('/[a-zA-Z0-9._]{5,}$/', $userName)){
                $validateUserName="Please re-enter the username";
            }
            else{
                $validateUserName=$userName;
            }
            if((empty($password) || strlen($password)<5) || (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password))){
                $validatePassword = "you have to enter more than 6 characters";
            }
            else{
                $validatePassword = "Password setted";
            }
            if(!empty($confirmPassword) || $password == $confirmPassword){
                $validateConfirmPassword = "Matched";
            }
            else{
                $validateConfirmPassword = "Please re-enter the password";
            }
            if(!isset($_POST['gender'])){
                $validateGender = "you can select only one";
            }
            else{
                $gender = null;
            }
            
            if(!isset($_POST['birthday'])){
                $validateDateOfBirth = "select your birth date";
            }
            
            $connection = new db();
            $conobj=$connection->OpenCon();

            $userQuery=$connection->RegUser($conobj,"registration",$name,$email,$userName,$password,$gender,$dob);
            
            $connection->CloseCon($conobj);
            
    }

?>