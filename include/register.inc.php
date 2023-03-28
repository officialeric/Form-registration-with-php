<?php
include 'db_connect.php';

if(isset($_POST['submit'])){

    // assigning the input values
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validation
    if(!$fname){
        header('location:../register.php?error=Firstname is required');
        exit();
    }else if(!$lname){
          header('location:../register.php?error=Lastname is required');
          exit();
      }else if(!$uname){
        header('location:../register.php?error=Username is required');
        exit();
    }else if(!$email){
        header('location:../register.php?error=Email is required');
        exit();
    }
//     else if(!$password){
//         header('location:../register.php?error=Password is required');
//         exit();
//     }
    else {

            // checking if email already registered in table
                $query = "SELECT * FROM users WHERE email='$email'";
                $result = mysqli_query($conn,$query);

                if(mysqli_num_rows($result)>0){ 
                    header('location:../register.php?error=Your email "'.$email.'" has already registered!');
                    exit();
                }else{ 
                    
                        $sql = "INSERT INTO users(first_name,last_name,user_name,email,password) 
                        VALUES('$fname','$lname','$uname','$email','$password')";
                        $result = mysqli_query($conn,$sql);

                        // managing results
                        if($result){
                            header('location:../login.php');
                            exit();
                        }else{
                            header('location:../register.php?error=Something went wrong!');
                            exit();
                        }

                   
                    }
          }

        }else{
            header('location:../register.php?error=Unknown error occured');
            exit();
        }