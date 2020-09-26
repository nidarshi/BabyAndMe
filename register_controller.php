<?php

include './function.php';
$err="";
//Validation
    if($_REQUEST['REQUEST_METHOD'] == 'POST'){

        if(empty($_POST['name'])){
            $err = "Full Name is required";
            hearder('Location:http://localhost/BabyAndMe/signup.php?err=');

        }else{
            $fullname= validate($_POST['name']);
        }

        if(empty($_POST['email'])){
            $err = "Email is required";

        }else{
            $email= validate($_POST['email']);
        }
        if(empty($_POST['nic'])){
            $err = "NIC is required";

        }else{
            $email= validate($_POST['nic']);
        }
        if(empty($_POST['username'])){
            $err = "User Name is required";

        }else{
            $username= validate($_POST['username']);
        }
        if(empty($_POST['password'])){
            $err = "Password is required";

        }else{
            $password= validate($_POST['password']);
        }
        if(empty($_POST['cpassword'])){
            $err = "Confirm Password is required";

        }else{
            $cpassword= validate($_POST['cpassword']);
        }
    }


$data = array(
    "NameWithInitials" => $_POST['name'],
    "dob" => $_POST['dob'],
    "email" => $_POST['email'],
    "nic" => $_POST['nic']
      
);

var_dump($data);
insertData("guardiandetails", $data);

$result = getAllData("guardiandetails");


//pass login data

$logindata = array(
    "userName" => $_POST['username'],
   "password" => md5($_POST['password'])
   
);

var_dump($data);
insertData("login", $logindata); 

$result2 = getAllData("login");
