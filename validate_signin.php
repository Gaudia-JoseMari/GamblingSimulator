<?php
	$error['eou'] =
	$error['password'] =
	$error['signin']= "";

	function sanitize(&$data) {
		$data = strip_tags($data);
		$data = trim($data);
		return $data;
	}

    include "dbconn.php";
	
	if (isset($_POST['signin'])) {
        // var_dump($_POST);
		$eou = sanitize($_POST['eou']);
		$password = sanitize($_POST['password']);

		if (empty($eou)) {
			$error['eou'] = "<span class='error'>Please enter your email or username</span><br>";
			$_POST['password'] = null;
		} elseif (empty($password)) {
            $error['eou'] = "";
			$error['password'] = "<span class='error'>Please enter your password</span><br>";
		} else {
			$sql = "SELECT * FROM user WHERE email = '$eou' OR username = '$eou'";
			$query = $conn -> query($sql);
			$record = $query -> fetch_array();
			$conn -> close();

			$password = hash('sha256', $password);
			if ($record === NULL) {
				$error['signin'] = "Account not registered";
			} elseif ($password == $record['password']){
				// echo '<br> Login Successful';
				session_start();
				$_SESSION['signed_in'] = true;
				$_SESSION['email'] = $record['email'];
				$_SESSION['username'] = $record['username'];
				header("location: home.php");
			} else {
				$error['signin'] = "Invalid password!";
			}
		}
	}
?>