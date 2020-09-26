<?php

include './connection.php';
$con = dbconnection();

function insertData($table, array $data) {
    global $con;
    
    $sql = "INSERT INTO $table(" . implode(" ,", array_keys($data)) . " )VALUES('" . implode("', '", array_values($data)) . "')";
    echo $sql;
 
 //$sql2 ="INSERT INTO guardiandetails VALUES()";
    if (mysqli_query($con, $sql)) {
        echo "You registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}



function getAllData($table){
    global $con;
    $sql = "Select * from $table";
    $result = mysqli_query($con, $sql);
    return $result; 
   
}

function validate($inputdata){
    HTML_SPECIALCHARS($inputdata);
    trim($inputdata);
    stripcslashes($inputdata);
    return $inputdata;
    
}

function getId($table,$id){
    global $con;
    $sql = "Select * from $table WHERE childId='".$id."'";
    $result = mysqli_query($con, $sql);
    return $result;  
    
   
}

/*
function UpdateData($table, array $data) {
    global $con;
    $sql = "UPDATE $table SET email='".$email."' WHERE email='".$id."'";
    $result = mysqli_query($con, $sql);
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }
}
/*function DeleteData($table,$id){
    global $con;
    $sql = "DELETE FROM $table WHERE childId='".$id."'";

    if (mysqli_query($con, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}*/
?>