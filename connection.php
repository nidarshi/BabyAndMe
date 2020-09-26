<?php

require 'config.php';

function dbconnection() {
    $con = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    if (!$con) {
        die("Connection Filed" . mysqli_connect_error());
    }
        //die("Connection Successfull");
    return $con;
}







