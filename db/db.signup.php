<?php
if(isset($_POST["submit"])) {
    
    include_once "db.connect.php";
    
    $first = mysqli_real_escape_string($connection, $_POST["first"]);
    $last =  mysqli_real_escape_string($connection, $_POST["last"]);
    $username =  mysqli_real_escape_string($connection, $_POST["username"]);
    $email =  mysqli_real_escape_string($connection, $_POST["email"]);
    $password =  mysqli_real_escape_string($connection, $_POST["password"]);
    
    // checking for empty fields
    
    if(empty($first) || empty($last) || empty($username) || empty($email) || empty($password)) {
        header("Location: ../signup.php?field=empty");
        exit();
    } else {
        // checking for valid characters
        
        if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("Location: ../signup.php?field=invalid");
            exit();
        } else {
            // checking for valid email
            
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?field=invalid-email");
                exit();
            } else {
                // checking for existing username
                
                $username_query = "select * from users where user_username='$username'";
                $username_result = mysqli_query($connection, $username_query);
                
                if(mysqli_num_rows($username_result) > 0) {
                    header("Location: ../signup.php?field=username-taken");
                    exit();
                } else {
                    // for new user hashing password
                    
                    $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
                    // inserting user into database
                    
                    $insert_user = "insert into users (user_first, user_last, user_username, user_email, user_password)
                    value ('$first', '$last', '$username', '$email', '$hashed_pwd');";
                    
                    mysqli_query($connection, $insert_user);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: signup.php");
    exit();
}