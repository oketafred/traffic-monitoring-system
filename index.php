<?php 
    
    session_start();

    $errorEmail = "";
    $errorPassword = "";

    if (isset($_SESSION["email"])) {
       
        header("Location: dashboard.php");

    }


    $conn = mysqli_connect("localhost", "root", "", "traffic");

    if (mysqli_connect_error()) {
        die("Connection Failed");
    }

    if (isset($_POST["login"])) {

        $email = $_POST["email"];
        $password = $_POST["password"];

        if (empty($email)) {
            $errorEmail = "Email is Required";
        }
        if (empty($password)) {
            $errorPassword = "Password is Required";
        }

        $query = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "QUERY FAILED";
        }

        while ($row = mysqli_fetch_array($result)) {
            $db_user_id = $row["user_id"];
            $db_user_firstname = $row["user_firstname"];
            $db_user_lastname = $row["user_lastname"];
            $db_user_email = $row["user_email"];
            $db_user_password = $row["user_password"];


            //Checking for Successful Login

            if ($email !== $db_user_email AND $password !== $db_user_password) {
            
                header("Location: index.php");

            }
            if ($email == $db_user_email AND $password == $db_user_password) {

                $_SESSION["id"] = $db_user_id;
                $_SESSION["firstname"] = $db_user_firstname;
                $_SESSION["lastname"] = $db_user_lastname;
                $_SESSION["email"] = $db_user_email;
                $_SESSION["password"] = $db_user_password;

                header("Location: dashboard.php");

            }else{

                header("Location: index.php");

            }

        }



    }



 ?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Project Name | Login Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/core.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/icons/fontawesome/styles.min.css">

    <script type="text/javascript" src="lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="lib/js/tether.min.js"></script>
    <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="assets/js/app.min.js"></script>

</head>

<body>
    <div class="page-container">
        <!-- PAGE CONTENT -->
        <div class="content h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="login card auth-box mx-auto my-auto">
                        <div class="card-block text-center">
                            <div class="user-icon">
                                <i class="fa fa-user-circle"></i>
                            </div>

                            <h4 class="text-light">Login</h4>

                            <div class="user-details">
                                <form method="POST">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                    <i class="fa fa-user-o"></i>
                                                </span>
                                            <input type="email" name="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                                        </div>
                                        <span class="text-danger"><?php echo $errorEmail; ?></span>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                    <i class="fa fa-key"></i>
                                                </span>
                                            <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                                        </div>
                                        <span class="text-danger"><?php echo $errorPassword; ?></span>
                                    </div>
                                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                </form>
                            </div>

                            

                            <div class="user-links">
                                <a href="#" class="text-center">Forgot Password?</a>
                                <!-- <a href="#" class="pull-right">Register</a> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /PAGE CONTENT -->
    </div>
</body>

</html>