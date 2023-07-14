<?php
$dbhostname = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "gambling";

    $conn = new mysqli(
        $dbhostname,
        $dbusername,
        $dbpassword,
        $dbname
    );

    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>