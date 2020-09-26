<?php

//include './function.php';
$err="";
//Validation
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

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
       
    }
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT guardianId FROM $table WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login'] = $myusername;
         
         header("location: guardian_dashboard.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }


//login data

$result2 = getAllData("login");



