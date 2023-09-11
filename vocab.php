<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/common phone.css">




    <title>Vocabulary</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');

        * {
            margin: 0px;
            padding: 0px;
        }

        #navbar {
            display: flex;
            align-items: center;
            position: relative;
            top: 0px;
        }

        #navbar::before {
            content: "";
            background-color: rgb(22, 120, 9);

            position: absolute;
            top: 0px;
            left: 0px;
            height: 100%;
            width: 100%;
            z-index: -1;
            /* opacity: 0.7; */
        }

        .container1 {
            /* border: 2px solid blue; */
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Bree Serif', serif;
        }

        .content {
            /* border: 2px solid red; */
            margin-top: 10px;
            padding: 33px;
            border-radius: 19px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .content strong {
            font-size: 37px;
            text-decoration: underline;
        }

        .content p {
            font-size: 20px;
        }

        .mid {
            /* border: 2px solid black; */
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Bree Serif', serif;
        }


        #list {
            /* border :2px solid red; */
            margin-top: 10px;
            padding: 60px;
            border-radius: 19px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        #list h1 {
            font-size: 51px;
            margin: 16px;
        }

        #list .word {
            font-size: 25px;
            color: dimgray;
        }

        #list .meaning {
            color: #19d419;
        }
      
#btn{
    padding: 6px 20px;
    border: 2px solid white;
    background-color: green;
    color: white;
    margin: 17px;
    font-size: 1.5rem;
    border-radius: 10px;
    cursor: pointer;
    margin-left: 45vw;
}
        footer {
    /* background: rgb(210 211 210); */
    background: rgb(62 177 46);
    /* color: white; */
    padding: 58px 0px;
    text-align: left;
    height: 495px;
    font-family: 'Bree Serif', serif;
}
    </style>
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <a href="index.php">
                <img src="logo.jpg" alt="QuizNia.in">
            </a>
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="#">Courses</a></li>
            <li class="item"><a href="#">Quizzes</a></li>
            <li class="item"><a href="contact_form.php">Contact Us</a></li>
        </ul>
    </nav>


    <div class="container1">
        <div class="content">

            <em>
                <p> <strong>VOCABULARY</strong>>>Vocabulary refers to the set of words and terms that a person knows and
                    understands in a particular language. </p>
            </em>
        </div>
    </div>

<br>
    <div class="mid">
        <div id="list">
            <strong>
                <h1>List of words</h1>
            </strong>
            <!-- <ul> -->
            <h2 class="word">1.Consider</h2>
            <em>
                <p class="meaning"> deem to be </p>
            </em>
            <p> At the moment, artemisinin-based therapies are considered the best treatment, but cost about $10 per
                dose - far too much for impoverished communities</p>
            <!-- </ul> -->
            <br>

            <h2 class="word">2. minute</h2>
            <em>
                <p class="meaning">infinitely or immeasurably small</p>
            </em>
            <p> The minute stain on the document was not visible to the naked eye.</p>
            <br>

            <h2 class="word">3. accord</h2>
            <em>
                <p class="meaning">concurrence of opinion</p>
            </em>
            <p>The committee worked in accord on the bill, and it eventually passed</p>
            <br>

            <h2 class="word">4. evident</h2>
            <em>
                <p class="meaning">clearly revealed to the mind or the senses or judgment</p>
            </em>
            <p>That confidence was certainly evident in the way Smith handled the winning play with 14 seconds left on
                the
                clock. </p>
            <br>

            <h2 class="word">5. practice</h2>
            <em>
                <p class="meaning">a customary way of operation or behavior</p>
            </em>
            <p>He directed and acted in plays every season and became known for exploring Elizabethan theatre practices.
            </p>
            <br>

            <h2 class="word">6. intend</h2>
            <em>
                <p class="meaning">have in mind as a purpose</p>
            </em>
            <p>“Lipstick, as a product intended for topical use with limited absorption, is ingested only in very small
                quantities,” the agency said on its website.</p>
            <br>

            <h2 class="word">7. concern</h2>
            <em>
                <p class="meaning">something that interests you because it is important</p>
            </em>
            <p>The scandal broke out in October after former chief executive Michael Woodford claimed he was fired for
                raising concerns about the company's accounting practices.</p>
            <br>

            <h2 class="word">8. commit</h2>
            <em>
                <p class="meaning">perform an act, usually with a negative connotation</p>
            </em>
            <p>In an unprecedented front page article in 2003 The Times reported that Mr. Blair, a young reporter on its
                staff, had committed journalistic fraud.</p>
            <br>

            <h2 class="word">9. issue</h2>
            <em>
                <p class="meaning">some situation or event that is thought about</p>
            </em>
            <p>As a result, the privacy issues surrounding mobile computing are becoming ever-more complex.</p>
            <br>

            <h2 class="word">10. approach</h2>
            <em>
                <p class="meaning">move towards</p>
            </em>
            <p>Spain's jobless rate for people ages 16 to 24 is approaching 50 percent.</p>
            <br>

        </div>
    </div>
    <button id="btn" onclick="tooglehide()">Show/Hide</button>
<br>
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
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Us</h2>
                    <nav class="list-none mb-10">
                        <li>
                        <a href="#about"class="text-gray-600 hover:text-gray-800">About Us</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Resources</h2>
                    <nav class="list-none mb-10">
                        <li>
                        <a href="#blog"class="text-gray-600 hover:text-gray-800">Blogs</a>
                        </li>
                        <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">CheatSheet</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Community</h2>
                    <nav class="list-none mb-10">
                        <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">Forums</a>
                        </li>
                        <li>
                        <a href="#"class="text-gray-600 hover:text-gray-800">Discord</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Subjects</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="english.php">English</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="science.php">Science</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="GS.php">General-studies</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="maths.php">Maths</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="reasoning.php">Reasoning</a>
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


<script>
     function tooglehide() {
         if (list.style.display != 'none') {

                list.style.display = 'none';
            }
            else {

                list.style.display = 'block';
            }
        }
</script>
</body>

</html>