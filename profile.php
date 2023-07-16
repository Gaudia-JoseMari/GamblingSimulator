<?php
include 'customFunctions.php'; 

$error['newUsername'] = "";
$error['newAge'] = "";
$error['newEmail'] = "";
$error['newPassword'] = "";
$error['upload'] = "";

function sanitize(&$data) {
    $data = strip_tags($data);
    $data = trim($data);
    return $data;
}

include "dbconn.php"; // Include the dbconn.php file only once

// Handle the username update form submission
if (isset($_POST['updateUsername'])) {
    $newUsername = sanitize($_POST['newUsername']);

    // Perform validation on the new username
    if (empty($newUsername)) {
        $error['newUsername'] = "<span class='error'>Please enter a new username</span><br>";
    } else {
        // Check if the new username already exists
        $sql = "SELECT * FROM user WHERE username = '$newUsername'";
        $query = $conn->query($sql);
        $namedup = $query->fetch_array();
        if ($namedup != NULL) {
            $error['newUsername'] = "<span class='error'>Username already exists</span><br>";
        }
    }

    // If there are no errors, update the username
    if (empty($error['newUsername'])) {
        // Update the username in the database
        $sql = "UPDATE user SET username = '$newUsername' WHERE email = '$_SESSION[email]'";
        $query = $conn->query($sql);

        // Update the $_SESSION['username'] variable
        $_SESSION['username'] = $newUsername;

        // Redirect back to the profile page
        header("Location: profile.php");
        exit();
    }
}

// Handle the age update form submission
if (isset($_POST['updateAge'])) {
    $newAge = sanitize($_POST['newAge']);

    // Perform any necessary validation on the new age
    if (empty($newAge)) {
        $error['newAge'] = "<span class='error'>Please enter a new age</span><br>";
    } else {
        if ($newAge < 18) {
            $error['newAge'] = "<span class='error'>You must be 18 years old or older</span><br>";
        }
    }

    // If there are no errors, update the age
    if (empty($error['newAge'])) {
        // Update the age in the database
        $sql = "UPDATE user SET age = '$newAge' WHERE email = '$_SESSION[email]'";
        $query = $conn->query($sql);

        // Update the $_SESSION['age'] variable
        $_SESSION['age'] = $newAge;

        // Redirect back to the profile page
        header("Location: profile.php");
        exit();
    }
}

// Handle the email update form submission
if (isset($_POST['updateEmail'])) {
    $newEmail = sanitize($_POST['newEmail']);

    // Perform any necessary validation on the new email
    if (empty($newEmail)) {
        $error['newEmail'] = "<span class='error'>Please enter a new email</span><br>";
    } else {
        // Check if the new email already exists
        $sql = "SELECT * FROM user WHERE email = '$newEmail'";
        $query = $conn->query($sql);
        $emaildup = $query->fetch_array();
        if ($emaildup != NULL) {
            $error['newEmail'] = "<span class='error'>Email already registered</span><br>";
        }
    }

    // If there are no errors, update the email
    if (empty($error['newEmail'])) {
        // Update the email in the database
        $sql = "UPDATE user SET email = '$newEmail' WHERE email = '$_SESSION[email]'";
        $query = $conn->query($sql);

        // Update the $_SESSION['email'] variable
        $_SESSION['email'] = $newEmail;

        // Redirect back to the profile page
        header("Location: profile.php");
        exit();
    }
}

// Handle the password update form submission
if (isset($_POST['updatePassword'])) {
    $newPassword = sanitize($_POST['newPassword']);

    // Perform any necessary validation on the new password
    if (empty($newPassword)) {
        $error['newPassword'] = "<span class='error'>Please enter a new password</span><br>";
    } else {
        // Perform additional password validation if needed
        // ...
    }

    // If there are no errors, update the password
    if (empty($error['newPassword'])) {
        // Hash the new password using SHA-256
        $hashedPassword = hash('sha256', $newPassword);

        // Update the password in the database
        $sql = "UPDATE user SET password = '$hashedPassword' WHERE email = '$_SESSION[email]'";
        $query = $conn->query($sql);

        // Redirect back to the profile page
        header("Location: profile.php");
        exit();
    }
}

// Handle the avatar upload form submission
if (isset($_POST['upload'])) {
    $upload_path = $_FILES['newPicture']['tmp_name'];
    if ($upload_path) {
        // Check file type
        if (!(exif_imagetype($upload_path) == 2 || exif_imagetype($upload_path) == 3)) {
            $error['upload'] = "<br>File must be a jpg/png<br>";
        } else {
            // Check file size
            if (filesize($upload_path) > 4000000) {
                $error['upload'] = "<br>File size must be less than 4MB<br>";
            } else {
                $filename = time() . $_FILES['newPicture']['name'];
                $upload = move_uploaded_file($upload_path, "image/avatar/" . $filename);
                if (!$upload) {
                    $error['upload'] = "<br>File upload unsuccessful<br>";
                } else {
                    $_SESSION['avatar'] = $filename;
                    $sql = "UPDATE user SET avatar = '$filename' WHERE email = '$_SESSION[email]'";
                    $query = $conn->query($sql);

                    // Redirect back to the profile page
                    header("Location: profile.php");
                    exit();
                }
            }
        }
    }
}

$conn->close(); // Close the database connection
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gambling</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
  </head>
  <body>
    <?php navbar(); ?>
    <!-- Container for user profile -->
    <div class="profileInfoContainer">
      <section class="vh-100 d-flex align-items-center" style="background-color: #f4f5f7;">
        <div class="container py-5">
          <h1 class="text-center">Profile</h1>
          <div class="row d-flex justify-content-center">
            <div class="col-lg-15 mb-4 mb-lg-0">
              <div class="card h-100 w-100" style="border-radius: .5rem;">
                <div class="row g-0">
                  <div class="col-md-4 gradient-custom text-center" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; background-color: #f4f5f7;">
                    <a href="#" id="editPictureButton">
                      <img src="image/avatar/<?php echo $_SESSION['avatar']; ?>" alt="Avatar" class="img-fluid my-5" style="min-width: 200px; max-width: 500px; clip-path: circle(); object-fit: contain;">
                    </a>
                    <div id="editPictureFormContainer" style="display: none;">
                      <form method="post" enctype="multipart/form-data" id="editPictureForm">
                        <div class="form-group mb-2">
                          <input type="file" class="form-control" id="editPictureInput" name="newPicture">
                        </div>
                        <input type="submit" value="Upload" name="upload">
                      </form>
                    </div>
                    <h5 style="color: black;">Credits</h5>
                    <p><?php echo $_SESSION['credits']; ?></p>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body p-4" style="height: 500px;">
                      <h6>Profile Information</h6>
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Username <a href="#" id="editUsernameButton">Edit</a>
                          </h6>
                          <p class="text-muted"><?php echo $_SESSION['username']; ?></p>
                          <div id="editUsernameFormContainer" style="display: none;">
                            <form id="editUsernameForm" method="post">
                              <div class="form-group mb-2">
                                <input type="text" class="form-control" id="editUsernameInput" name="newUsername" placeholder="Enter new username">
                              </div>
                              <button type="submit" class="btn btn-primary" name="updateUsername">Save</button>
                            </form>
                          </div>
                          <?php echo $error['newUsername']; ?>
                        </div>
                        <div class="col-6 mb-3">
                          <h6>Age <a href="#" id="editAgeButton">Edit</a>
                          </h6>
                          <p class="text-muted"><?php echo $_SESSION['age']; ?></p>
                          <!-- Age Update Form -->
                          <div id="editAgeFormContainer" style="display: none;">
                            <form id="editAgeForm" method="post">
                              <div class="form-group mb-2">
                                <input type="text" class="form-control" id="editAgeInput" name="newAge" placeholder="Enter new age">
                              </div>
                              <button type="submit" class="btn btn-primary" name="updateAge">Save</button>
                            </form>
                          </div>
                          <?php echo $error['newAge']; ?>
                        </div>
                      </div>
                      <h6>Account Credentials</h6>
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Email Address <a href="#" id="editEmailButton">Edit</a>
                          </h6>
                          <p class="text-muted"><?php echo $_SESSION['email']; ?></p>
                          <!-- Email Update Form -->
                          <div id="editEmailFormContainer" style="display: none;">
                            <form id="editEmailForm" method="post">
                              <div class="form-group mb-2">
                                <input type="email" class="form-control" id="editEmailInput" name="newEmail" placeholder="Enter new email">
                              </div>
                              <button type="submit" class="btn btn-primary" name="updateEmail">Save</button>
                            </form>
                          </div>
                          <?php echo $error['newEmail']; ?>
                        </div>
                        <div class="col-6 mb-3">
                          <h6>Password <a href="#" id="editPasswordButton">Edit</a>
                          </h6>
                          <p class="text-muted"></p>
                          <!-- Password Update Form -->
                          <div id="editPasswordFormContainer" style="display: none;">
                            <form id="editPasswordForm" method="post">
                              <div class="form-group mb-2">
                                <input type="password" class="form-control" id="editPasswordInput" name="newPassword" placeholder="Enter new password">
                              </div>
                              <button type="submit" class="btn btn-primary" name="updatePassword">Save</button>
                            </form>
                          </div>
                          <?php echo $error['newPassword']; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>
