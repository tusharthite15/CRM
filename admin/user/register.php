<!-- 
<?php  ?>
<?php

require_once(__DIR__ . '/../config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['cpass'];

    if ($password != $confirmPassword) {
        echo "Passwords do not match.";
        exit;
    }
    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $query = "INSERT INTO accounts (username, Email, password) VALUES ('$username', '$email', '$hashedPassword')";

    if (mysqli_query($conn, $query)) {
        // Redirect to the dashboard page
        header("Location: #");
        exit; // Make sure to exit after redirection
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>



<!DOCTYPE html>
<html lang="en">
<?php require_once('inc/header.php') ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Welcome to to the DataQuantum</title>
    <link rel="icon" href="http://localhost/CRM/app/modules/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="assests/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700&family=Noto+Sans:ital,wght@0,100;0,200;0,300;1,400;1,700&family=Titillium+Web:ital,wght@0,300;0,400;0,600;1,600&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="jquery-3.6.4.min.js"></script>
    <script> src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"
        integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<script>
    start_loader()
  </script>
<style>
    /* Reset some default styles */
    bbody,
    html {
        margin: 0;
        padding: 0;
        font-family: 'Leage Spartan', sans-serif;
        background: url('./sign-in-box@3x.png') no-repeat center center fixed;

        -webkit-background-size: cover;

        background-size: cover;
    }

    /* Styling for the login form container */
    .sign_up_page {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        height: 100vh;

        padding-right: 20px;
        /* Adjust this value for proper alignment */
    }

    .bg-img {
        margin-left: 300px;
        background: rgba(0, 0, 0, 0.7);

    }

    .signup-form {
        width: 100%;
        max-width: 400px;
        margin: auto;
        padding: 40px;
        margin-top: 100px;
        margin-right: 100px;
        border-radius: 5px;
        background: #fff;
    }

    .signup-form h2 {
        text-align: center;
        margin-bottom: 10px;
        color: #333;
    }

    .signup-form p.hint-text {
        text-align: center;
        margin-bottom: 10px;
        color: #999;
    }

    /* Styling for form fields */
    .form-group {
        margin-bottom: 20px;
        padding-right: 10px;
        border-style: none;
    }

    .form-group .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        outline: none;
        transition: all 0.1s ease;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    /* Styling for buttons */
    .btn-success {
        background-color: #0FA958;
        border: none;
        border-radius: 5px;
        align-items: center;

    }

    .btn-block {
        width: 100%;
        padding: 10px 30px;
        text-align: center;
        font-weight: 600;
        color: #333;
        font-size: 15px;
        width: 400px;
        text-decoration: none;
        display: inline-block;
    }

    /* Styling for links */
    .text-center a {
        color: #333;
        text-decoration: none;
        margin-top: 20px;
        text-align: center;

    }

    .or-container {
        align-items: center;
        color: #ccc;
        display: flex;
        margin: 10px 0;
    }

    .line-separator {
        background-color: #ccc;
        flex-grow: 5;
        height: 1px;
    }

    .text-center a:hover {

        text-decoration: underline;
    }

    .btn-google {
        color: #545454;
        background-color: #ffffff;
        box-shadow: 0 1px 2px 1px #d9d9dd;
        width: 350px;
        margin-bottom: 20px;

    }


    /* Responsive styling for small screens */
    @media (max-width: 480px) {
        .signup-form {
            padding: 20px;
        }
    }
</style>

<body>

    <div class="sign_up_page">
        <!-- Sign up form -->
        <div class="bg-img">
            <img src="./logo.png" alt="DQ" width="300" height="130">
        </div>
        <div class="signup-form">
            <form action="register.php" method="post">
                <h2>Register</h2>
                <p class="hint-text">Create your account</p>
                <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Name"
                        required="required">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                        required="required">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        required="required">
                    <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirm Password"
                        required="required">

                    <div class="form-group">
                        <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a
                                href="#">Terms
                                of Use</a> & <a href="#">Privacy Policy</a></label>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>

                    </div>
                    <div class="or-container">
                        <div class="line-separator"></div>
                        <div class="or-label">or</div>
                        <div class="line-separator"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline" href="../services/login_with_google.php"><img
                                    src="https://img.icons8.com/color/16/000000/google-logo.png"> Signup Using
                                Google</a>

                        </div>
                    </div>
                    <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
            </form>

        </div>
    </div>
</body>

</html> -->