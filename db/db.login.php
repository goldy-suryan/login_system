<?php

session_start();

if(isset($_POST['submit'])) {
    include_once "db.connect.php";

    $username = mysqli_real_escape_string($connection, $_POST["username"]);
    $password = mysqli_real_escape_string($connection, $_POST["password"]);

    // checking for empty inputs

    if(empty($username) || empty($password)) {
        header("Location: ../login.php?fields=empty");
        exit();
    } else {
        // querying for user in the database

        $login_query = "select * from users where user_username='$username' OR user_email='$username'";
        $login_result = mysqli_query($connection, $login_query);

        if(mysqli_num_rows($login_result) > 0) {
            $row = mysqli_fetch_assoc($login_result);

            if($row > 0) {
                // checking for password or dehashing the password
                $check_password = password_verify($password, $row["user_password"]);

                if($check_password) {
                    $_SESSION["first"] = $row["user_first"];
                    $_SESSION["last"] = $row["user_last"];
                    $_SESSION["email"] = $row["user_email"];
                    $_SESSION["username"] = $row["user_username"];

                    header("Location: ../index.php?login=success");
                    exit();
                } else {
                    header("Location: ../login.php?login=error");
                    exit();
                }
            } else {
                header("Location: ../login.php?login=invalid");
                exit();
            }
        } else {
            header("Location: ../login.php?login=error");
            exit();
        }
    }
} else {
    header("Location: ../login.php?fields=invalid");
    exit();
}