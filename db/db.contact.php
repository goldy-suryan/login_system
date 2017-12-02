<?php

if(isset($_POST["submit"])) {
    
    include "db.connect.php";
    
    $product = mysqli_real_escape_string($connection, $_POST["product"]);
    $username = mysqli_real_escape_string($connection, $_POST["username"]);
    $query = mysqli_real_escape_string($connection, $_POST["query"]);
    $firstName = mysqli_real_escape_string($connection, $_POST["firstname"]);
    $lastName = mysqli_real_escape_string($connection, $_POST["lastname"]);
    $address = mysqli_real_escape_string($connection, $_POST["address"]);
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $phone = mysqli_real_escape_string($connection, $_POST["phone"]);
    
    // checking for empty inputs
    
    if(empty($product) || empty($username) || empty($query) || empty($firstName) || empty($lastName) || empty($address) || empty($email) ||empty($phone)){
        header("Location: ../contact.php?input=required");
        exit();
    } else {
        // checking for valid characters
        
        if(!preg_match("/^[a-zA-Z\s]+$/", $product) || !preg_match("/^[a-zA-Z]*$/", $firstName) || !preg_match("/^[a-zA-Z]*$/", $lastName) || !preg_match("/^[A-Za-z0-9_~\-!@#\$%\^&\*\(\)]+$/", $username)){
            header("Location: ../contact.php?contact=invalid");
            exit();
        } else {
            // checking for valid email
            
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../contact.php?contact=invalidEmail");
                exit();
            } else {
                // insert query into database

                $insert_contact_query = "insert into contact (c_product, c_username, c_query, c_firstname, c_lastname, c_address, c_email, c_phone)
                value ('$product', '$username', '$query', '$firstName', '$lastName', '$address', '$email', '$phone');";
                
                mysqli_query($connection, $insert_contact_query);
                header("Location: ../signup.php?signup=success");
                exit();
            }
        }
    }
}