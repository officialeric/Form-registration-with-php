<?php
session_start();
include 'db_connect.php';

if(isset($_POST['submit'])){

    // assigning the input values
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validation
   if(!$email){
        header('location:../login.php?error=Email is required');
        exit();
    }else if(!$password){
        header('location:../login.php?error=Password is required');
        exit();
    }else {
    
        // selecting all from table
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn,$sql); 

        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);

            // checking if input password is correct 
            if($password != $user['password']){
                header('location:../login.php?error=Incorrect password');
                exit(); 
            }else {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['first_name'] = $user['fist_name'];
                $_SESSION['user_name'] = $user['user_name'];
                $_SESSION['email'] = $user['email'];




                header('location:../home.php?id='.$_SESSION['user_id']);
            }
            
        }else{
            header('location:../login.php?error=Email "'.$email.'" has not yet registered , Please Go Register');
            exit(); 
        }
       
    }


}