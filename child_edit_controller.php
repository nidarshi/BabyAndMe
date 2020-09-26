<?php

include './function.php';

//Validation
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(empty($_POST['fullname'])){
            $err = "Full Name is required";
            hearder('Location:http://localhost/webProject/child_edit.php?err=');

        }else{
            $fullname= validate($_POST['fullname']);
        }

        
    }


$data = array(
    "fullname" => $_POST['fullname'],
    
);

var_dump($data);
UpdateData("childdetails", $data);


$result = getAllData("childdetails");
