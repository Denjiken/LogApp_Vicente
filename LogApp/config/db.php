<?php
     // Create connection
     $DB_HOST = "localhost";
     $DB_USER = "root";
     $DB_PASS = "";
     $DB_NAME = "user_logapp";
	 $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    // Check Connection
    if(mysqli_connect_errno()){
        // Connection Failed
        echo 'Failed to connect to MySQL: '. mysqli_connect_errno();
    }
