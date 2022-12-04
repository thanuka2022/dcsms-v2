<?php

include "config.php";

session_start();
$erorrs = [];

if (!isset($_SESSION['login'])) {
    if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $password  = $_POST['password'];
        $role = $_POST['role'];

        //check user

        $sql = "SELECT * FROM `users`  where username = '$username' OR email = '$username' AND role = '$role'";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) == 1) {

                $fetch = mysqli_fetch_assoc($result);

                if (password_verify($_POST['password'], $fetch['password'])) {
                    if ($fetch['v_user'] == 1 && $fetch['role'] == 'user') {
                        //   $_SESSION['login'] = true;
                        // $_SESSION['name'] = $fetch['name'];
                        echo "<script> alert('Login Successfully');</script>";
                        header("refresh: 0; url=http://localhost/dcsmsv-2/Customer-Dashboard/postjob.php");
                    } elseif ($fetch['v_user'] == 1 && $fetch['role'] == 'employee') {
                        //  $_SESSION['login'] = true;
                        // $_SESSION['name'] = $fetch['name'];
                        echo "<script> alert('Login Successfully');</script>";
                        header("refresh: 0; url=http://localhost/dcsmsv-2/Employee-Dashboard/findjob.php");
                    } elseif ($fetch['v_user'] == 1 && $fetch['role'] == 'admin') {
                        //  $_SESSION['login'] = true;
                        // $_SESSION['name'] = $fetch['name'];
                        echo "<script> alert('Login Successfully');</script>";
                        header("refresh: 0; url=http://localhost/dcsmv-2/Admin-Dashboard/registeremployee.html");
                    } else {
                        echo "<script>alert('User Not Verified Please Check Your Mail')</script>";
                    }
                } else // if pass not match
                {
                    echo "<script> alert('invalid password');</script>";
                }
            } else // if a user not found
            {
                echo "<script> alert('user not found');</script>";
            }
        } else {
            echo "<script> alert('Query Faild....001');</script>";
        }
    }
}

/*else{
    {
   header("location: index.php");
} */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssform/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background: rgb(47, 130, 253);
            background: linear-gradient(58deg, rgba(47, 130, 253, 1) 21%, rgba(12, 164, 222, 1) 49%, rgba(229, 227, 250, 1) 100%);
        }
    </style>
</head>

<body>
    <div class="reg ">

        <div class="container">
            <?php if (isset($errorMsg)) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $errors; ?>
                </div>
            <?php } ?>
            <form action="log.php" method="POST">
                <div class="form-reg shadow p-3 mb-5 bg-white rounded">
                    <h5 class="welcome-text text-center">WELCOME BACK</h5>
                    <div class="welcome-form text-center">
                        <input type="text" placeholder="Username or Email Address" class="form-control" name="username" required><br />
                        <input type="password" placeholder="Password" class="form-control" name="password" required><br>
                        <select class="form-select mt-1" name="role">
                            <option value="user">User</option>
                            <option value="employee">Employee</option>
                            <option value="admin">Admin</option>
                        </select>
                        </select>
                        <input type="submit" name="login" class="btn btn-primary mt-3" value="Login">
                        <p class="text-center text-muted mt-3 mb-0">Not Registered ?
                            <a href="reg.php"><u>Create an account</u></a><br>
                            <a id="btn" class="text-danger " href="forget-password.php" style="font-size: 15px;text-decoration:none; ">Forget Password</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>