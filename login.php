<?php
//this script will handel login 
session_start();

//check if the user is already logged in
if(isset($_SESSION['username'])){
// header("location: dashboard.php");
// exit;
}
require_once "database_connect.php";

$email=$password="";
$err="";


//if  request method is post
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty(trim($_POST['email']))|| empty(trim($_POST['password']))){
        $err="Please enter all fields";
    }
    else{
        $email=trim($_POST['email']);
        $password=trim($_POST['password']);
    }
    if(empty($err)){
        $sql="SELECT email,password FROM user_table WHERE email=?";
        $stmt= mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        $param_email=$email;

        //try to execute this statement
        if(mysqli_stmt_execute($stmt)){
            
            //store result
            mysqli_stmt_store_result($stmt);
            
            //check if email exists
            if(mysqli_stmt_num_rows($stmt)==1){
            
                //bind result
                mysqli_stmt_bind_result($stmt,$username,$hashed_password);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
            
                //this means the passwordis correct. Allow user to log in
                session_start();
                $_SESSION['username']=$username;
                // $_SESSION['id']=$id;
                $_SESSION["loggedin"]=true;

                //redirectuser to dashboard page
                header("location: after_login.php");
                    }
                }
        }
    }
}
}





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">
   
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .login{
            background: url('background2.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 745px;
            /* border: 2px solid red; */
        }
        .box{
           background-color: white;
           opacity: 0.7;
            border-radius: 10px;
            height: 268px;
            width: 500px;
            text-align: center;
            /* box-shadow: 7px 5px 10px grey; */
        }
        .login h1{
            font-size: 50px;
            font-family: 'Edu NSW ACT Foundation', cursive;
        }
        .fill {
            font-size: 20px;
            font-family: 'Edu NSW ACT Foundation', cursive;
        }
        .form-control {
            border-radius: 10px;
            height: 30px;
            width: 301px;
        }
        .btn {
            background-color: #02ef67;
            columns: black;
            height: 29px;
            border-radius: 10px;
            width: 213px;

        }
    </style>
</head>
<body>
    <section class="login">
        <div class="box">
            <h1>Login with QuizNia</h1>
            <br>
            <form class="fill" method="post" action="">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="email">E-Mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="enter your mail"required>

                    </div>
                    <br>
                    
                    <div class="col-md-3 mb-3">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="123bhgfy#@"
                            required>

                    </div>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </div>

                <div class="modal-footer">
                    <span>
                        <a href="signup.php" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
                        to register a new account
                    </span>
                </div>

            </form>



    </section>
</body>
</html>