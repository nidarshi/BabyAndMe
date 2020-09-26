<?php

include './function.php';
$err="";

   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

//Validation
    if($_REQUEST['REQUEST_METHOD'] == 'POST'){

        if(empty($_POST['nwi'])){
            $err = "Name with Initials is required";

        }else{
            $email= validate($_POST['nwi']);
        }
        if(empty($_POST['name'])){
            $err = "Full Name is required";
            hearder('Location:http://localhost/BabyAndMe/child_registration.php?err=');

        }else{
            $fullname= validate($_POST['name']);
        }

        if(empty($_POST['email'])){
            $err = "Email is required";

        }else{
            $email= validate($_POST['email']);
        }
        if(empty($_POST['dob'])){
            $err = "Date of Birth is required";

        }else{
            $email= validate($_POST['dob']);
        }
        if(empty($_POST['birthheight'])){
            $err = "Birth Height is required";

        }else{
            $email= validate($_POST['birthheight']);
        }
        if(empty($_POST['birthweight'])){
            $err = "Birth Weight is required";

        }else{
            $username= validate($_POST['birthweight']);
        }
        if(empty($_POST['bloodgroup'])){
            $err = "Blood Group is required";

        }else{
            $password= validate($_POST['bloodgroup']);
        }
         if(empty($_POST['image'])){
            $err = "Profile Picture is required";

        }else{
            $cpassword= validate($_POST['image']);
        }
        if(empty($_POST['specialdiscription'])){
            $err = "Special Discription is required";

        }else{
            $cpassword= validate($_POST['specialdiscription']);
        }
    }


$data = array(
 
    "nameWithInitials" => $_POST['name'],
    "fullname" => $_POST['fullname'],
    "dob" => $_POST['dob'],
    "birthWeight" => $_POST['birthweight'],
    "birthHeight" => $_POST['birthheight'],
    "bloodGroup" => $_POST['bloodgroup'],
    "image" => $_POST['image'],
    "specialDiscription" => $_POST['specialdiscription'],
    "guardianId" => $_POST['guardianid'],
      
);

var_dump($data);
insertData("childdetails", $data);

$result = getAllData("childdetails");


