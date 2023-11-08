<?php
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "sklep_spożywczy";
    
    // Create connection
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

?>