<?php include 'customFunctions.php';
    if(!isset($_SESSION['signed_in'])) {
        header("Location: signin.php");
    } else {
        if($_SESSION['signed_in'] == false) {
            header("Location: signin.php");
        }
    }
?>