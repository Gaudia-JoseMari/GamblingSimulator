<?php
    $error['username'] =
	$error['email'] = 
    $error['password'] =
    $error['confirmPassword'] =
    $error['signup'] = 
    $error['age'] = "";

	function sanitize(&$data) {
		$data = strip_tags($data);
        $data = trim($data);
        return $data;
	}

    include "dbconn.php";

    if(isset($_POST['signup'])) {
        $user['username'] = sanitize($_POST['username']);
        $user['email'] = sanitize($_POST['email']);
        $user['password'] = sanitize($_POST['password']);
        $user['confirmPassword'] = sanitize($_POST['confirmPassword']);
        $user['age'] = sanitize($_POST['age']);

        if (empty($user['username'])) {
            $error['username'] = "<span class=error>Please enter your username</span><br>";
        } else {
            $sql = "SELECT * FROM user WHERE username = '$user[username]'";
            $query = $conn -> query($sql);
            $namedup = $query -> fetch_array();
            if ($namedup != NULL) {
                $error['username'] = "<span class=error>Username already exists</span><br>";
            }
        }

        if (empty($user['email'])) {
            $error['email'] = "<span class=error>Please enter your email</span><br>";
        } else {
            $sql = "SELECT * FROM user WHERE email = '$user[email]'";
            $query = $conn -> query($sql);
            $emaildup = $query -> fetch_array();
            if ($emaildup != NULL) {
                $error['email'] = "<span class=error>Email already registered</span><br>";
            }
        }

        if (empty($user['password'])) {
            $error['password'] = "<span class=error>Please enter your password</span><br>";
            $error['confirmPassword'] = "<span class=error>Please re-enter your password</span><br>";
            $pass = False;
        } else {
            if (empty($user['confirmPassword'])) {
                $error['confirmPassword'] = "<span class=error>Please re-enter your password</span><br>";
                $pass = False;
            } else {
                if ($user['password'] != $user['confirmPassword']) {
                    $error['confirmPassword'] = "<span class=error>Password does not match</span><br>";
                    $pass = False;
                } else {
                    $pass = True;
                }
            }
        }

        if (empty($user['age'])) {
            $error['age'] = "<span class=error>Please enter your age</span><br>";
        } else {
            if ($user['age'] < 18) {
                $error['age'] = "<span class=error>Must be 18 years old and above</span><br>";
                $legal = False;
            } else {
                $legal = True;
            }
        }

        foreach ($user as $key => $value) {
            if (empty($value)) {
                $error['signup'] = "Fill up missing fields.<br>";
                $null = True;
                break;
            } else {
                $null = False;
            }
        }
        // var_dump($user);
        if (!$null && !$emaildup && !$namedup && $pass && $legal) {
            $user['password'] = hash('sha256', $user['password']);
            // echo "Success!<br>";

            include "dbconn.php";
            $sql = "INSERT INTO user(username, email, password, age)
                    VALUES('$user[username]', '$user[email]', '$user[password]', '$user[age]')";
            
            $result = $conn -> query($sql);
            $conn -> close();

            if ($result) {
                header("location: signup_successfull.php");
            } else {
                header("location: error_occured.php");
            }
        }
    }
?>