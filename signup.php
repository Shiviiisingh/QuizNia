<?php
require_once "database_connect.php";
$firstname=$lastname=$username=$contact=$email=$password="";
$firstname_err=$lastname_err=$username_err=$contact_err=$email_err=$password_err="";
if($_SERVER['REQUEST_METHOD']=="POST"){



    //check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err="username is required";
}
else{
               $sql="SELECT id FROM user_table WHERE username=?"; 
                    $stmt = mysqli_prepare($conn,$sql); 
                 if($stmt){
                 mysqli_stmt_bind_param($stmt, "s", $param_username);

                  //set the value of param username
                  $param_username = trim($_POST["username"]);
  
                 //try to execute this statement
                    if(mysqli_stmt_execute($stmt)){
                       /*store result*/
                         mysqli_stmt_store_result($stmt);
                         if(mysqli_stmt_num_rows($stmt)==1){
                   $username_err="This username is already taken";
              }
            else{
              $username=trim($_POST['username']);
       }}
             else{
                  echo"something went wrong";
                     }
                    }
}
}

//check for password
if(empty(trim($_POST['password']))){
$password_err="password cannot be blank";
}
elseif(strlen(trim($_POST['password']))<8){
    $password_err="password must have atleast 8 characters";
}
else{
    $password=trim($_POST['password']);
}

//check for email field
if(empty(trim($_POST['email']))){
    $email_err="email cannot be blank";
}
elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $email_err="invalid email";
}
else{
    $email=trim($_POST['email']);
}
//check for phone number
if(empty(trim($_POST['contact']))){
$contact_err="please provide a valid contact number";
}
elseif (strlen(trim($_POST['contact']))<10){
    $contact_err="contact number must have atleast 10 digits";
}
else{
    $contact=trim($_POST['contact']);
}

//check for first_name
if(empty(trim($_POST['firstname']))){
    $firstname_err="first name cannot be blank";
}
else{
    $firstname=trim($_POST['firstname']);
}
//check for last_name
if(empty(trim($_POST['lastname']))){
    $lastname_err="last name cannot be blank";
}
else{
    $lastname=trim($_POST['lastname']);
}


//if there were no error, go ahead and insert into database
if(empty($firstname_err) && empty($lastname_err) && empty($email_err) && empty($password_err) && empty($contact_err)){
    $sql="INSERT INTO user_table (first_name,last_name,username,email,password,contact) VALUES (?,?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt){
    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname,$username, $email, $password, $contact);

    //set these parameters
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
    $contact = trim($_POST['contact']);



    //try to execute the query
    if(mysqli_stmt_execute($stmt)){
        //if insert success, display success message
        header("location: login.php");
    }
    else{
        //if insert failed, display error message
        echo"something went wrong...cannot redirect!";
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
    <title>signup-form page</title>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">
   

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .signup {
            background: url('background1.jpg') no-repeat center center/cover;
            height: 750px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .box {
            background-color: white;
            border-radius: 10px;
            opacity: 0.7;
            height: 500px;
            width: 500px;
            text-align: center;
        }

        .signup h1 {
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
            width: 139px;

        }
    </style>
</head>

<body>
    <section class="signup">
        <div class="box">
            <h1>SignUp with QuizNia</h1>
            <br>
           <form class="fill" method="POST" action="">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="firstname">First name</label>
                        <input type="text" class="form-control" id="firstname"name="firstname"placeholder="First name"required>

                    </div>
                    <br>
                    <div class="col-md-4 mb-3">
                        <label for="lastname">Last name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" required>

                    </div>
                    <br>
                    <div class="col-md-4 mb-3">
                        <label for="username">Username</label>

                        <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                            aria-describedby="inputGroupPrepend3" required>

                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="contact">Contact</label>
                        <input type="text" class="form-control" id="contact"name="contact" placeholder="Phone Number"
                            required>

                    </div>
                    <br>
                    <div class="col-md-3 mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="abcd@dcdh.com"
                            required>

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

                    <button type="submit" class="btn">Create Account</button>

                </div>

                <div class="signup-footer">
                    <span>Already have an account?
                        <a href="login.php" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                    </span>
                </div>

            </form>
        </div>
    </section>
</body>

</html>