<?php
session_start();
require_once "../config/functions.php";


// Login===========
if (isset($_POST['login_btn'])) {

    $userid_email = htmlspecialchars($_POST['user_name']);
    $password = htmlspecialchars($_POST['user_pass']);

    if (!empty($userid_email) and !empty($password)) {

        $data = SelectData('users8r6', "WHERE user_name='$userid_email' ");
        $result = $data->fetch_object();

        if ($data->num_rows > 0) {
            if ($password == $result->user_pass) {
                $_SESSION['admin_user'] = $result->user_name;
                Reconect('index.php');
            } else {
                $mess =  "Password does not match.";
            }
        } else {
            $mess = "User name not match";
        }
    } else {
        $mess = "All fill are required fields";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Institute for Human Capital Development</title>
    <link rel="icon" type="image/x-icon" href="../assets/upload/brand/fvicon.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/4ji99lkzm49svloyysqo9xvmtu03b24c3gvvfby23di6bhfa/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    <div class="container-scroller">

        <div class="row flex-grow">
            <div class="col-md-4 mx-auto">
                <div class="card mt-5">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="../assets/img/logo/logo.png" width="250">
                        </div>
                        <h4 class="mt-5">Hello! let's get started</h4>
                        <h6 class=" font-weight-light">Sign in to continue.</h6>
                        <span class="text-danger fw-bold"><?php if (isset($mess)) {
                                                                echo $mess;
                                                            } ?></span>
                        <form class="pt-3" action="" method="POST">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control form-control-lg" name="user_name" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="user_pass" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <button type="submit" name="login_btn" class="btn btn-success" href="index.html">SIGN IN</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</body>

</html>