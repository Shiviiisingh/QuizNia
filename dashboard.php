<!-- <
?php
session_start();
require "database_connect.php";

if (!isset($_SESSION["user_id"])) {
    header("location: dashboard.php");
    die();
}
$user_id = $_SESSION['user_id'];

$sql_1 = "SELECT * FROM user_table WHERE id = $user_id";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$user = mysqli_fetch_assoc($result_1);
if (!$user) {
    echo "Something went wrong!";
    return;
}


 ?> -->


<!-- attempted quiz details to be done in php -->

<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | QuizNia</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="CSS/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/dashboard.css">
 
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />

  
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />


    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>

<body>
    <section class="one">
        <header class="header">
            <div class="left">
                <a href="index.html">
                    <img src="logo.jpg" alt="QuizNia.in">
                </a>
            </div>
            <div class="right">
                <div class="list">
                    <
                    ?php echo"Welcome". $_SESSION['username']?>
                </div>

                <ul>
                    <a class="list" href="logout.php">
                        <span class="material-symbols-outlined">
                            login
                        </span>
                        Logout
                    </a>
                </ul>
                <ul>
                    <a class="list" href="#">
                        <span class="material-symbols-outlined">
                            settings
                        </span>
                        Settings
                    </a>
                </ul>
            </div>
        </header>
    </section>

    <section class="mid">
        <div class="user">
            <div class="myprofile">
                <h1>My Profile</h1>
            </div>
            <div class="row">
                <div class="col-md-3 img-container">
                    <img class="profile-img" src="man.png" alt="">

                </div>
                <div class="row1">
                    <div class="info no-gutters justify-content-between align-items-end">
                        <div class="profile">
                            <div class="name">
                                <
                                ?$user['first_name']?>
                            </div>
                            <div class="email">
                                <
                                ?$user['email']?>
                            </div>
                            <div class="phone">
                                <
                                ?$user['contact']?>
                            </div>

                        </div>
                        <div class="edit">
                            <a class="editing" href="#">Edit Profile</a>
                            <a class="editing" href="#">Change Password</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="last">
                <p>Attempted quiz goes here....</p>
            </div>
        </div>
    </section>






    
    <footer class="text-gray-600 body-font">
        <div
            class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                 
                    <img src="logo.jpg" alt="QuizNia.in">
                    <span class="ml-3 text-xl">QuizNia</span>
                </a>
                <p class="mt-2 text-sm text-gray-500">One Stop For Quizzes</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Subjects</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">© 2023 QuizNia </p>

            </div>
        </div>

    </footer>

</body>

</html> -->





















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | QuizNia</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="CSS/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="CSS/dashboard.css">
    <!-- dashboard img link  -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />

    <!-- logout img link  -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />

    <!-- font link -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">

    <!-- setting icon -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>

<body>
    <section class="one">
        <header class="header">
            <div class="left">
                <a href="index.php">
                    <img src="logo.jpg" alt="QuizNia.in">
                </a>
            </div>
            <div class="right">
                <div class="list">
                   Welcome User
                </div>

                <ul>
                    <a class="list" href="logout.php">
                        <span class="material-symbols-outlined">
                            login
                        </span>
                        Logout
                    </a>
                </ul>
                <ul>
                    <a class="list" href="#">
                        <span class="material-symbols-outlined">
                            settings
                        </span>
                        Settings
                    </a>
                </ul>
            </div>
        </header>
    </section>

    <section class="mid">
        <div class="user">
            <div class="myprofile">
                <h1>My Profile</h1>
            </div>
            <div class="row">
                <div class="col-md-3 img-container">
                    <img class="profile-img" src="man.png" alt="">

                </div>
                <div class="row1">
                    <div class="info no-gutters justify-content-between align-items-end">
                        <div class="profile">
                            <div class="name">
                               user
                            </div>
                            <div class="email">
                               user@gmail.com
                            </div>
                            <div class="phone">
                               9876543210
                            </div>

                        </div>
                        <div class="edit">
                            <a class="editing" href="#">Edit Profile</a>
                            <a class="editing" href="#">Change Password</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="last">
                <p>Attempted quiz goes here....</p>
            </div>
        </div>
    </section>






    <footer class="text-green-600 body-font">
        <div class="bottom">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-900 text-sm text-center sm:text-left">© 2023 QuizNia </p>

            </div>
        </div>

    </footer>

</body>

</html>