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




    <title>HISTORY</title>
    <style>
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
        .historyone{
            border: 2px solid red;
            text-align: left;
            margin: 28px;
            
            font-family: 'Bree Serif', serif;
            height: auto;
            margin-top: 10px;
            padding: 33px;
            border-radius: 19px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            text-decoration: underline;
            color:green;
        }
        .historyone strong{
            font-size: 40px;
        }
        .historyone h1{
            font-size: 20px;
        }
        .text{
            border: 2px solid red;
            text-align: left;
            margin: 28px;
            
            font-family: 'Bree Serif', serif;
            height: auto;
            margin-top: 10px;
            padding: 33px;
            border-radius: 19px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        #harappanseal{
            display: flex;
        }

        .ebtn {
  padding: 6px 20px;
  border: 2px solid white;
  background-color: rgb(22, 120, 9);
  color: white;
  /* margin: 17px; */
  font-size: 1.5rem;
  border-radius: 10px;
  cursor: pointer;
  margin-left: 91vh;
  margin-bottom: 2vh;
}

.ebtn:hover {
  padding: 6px 20px;
  border: 2px solid white;
  background-color: rgb(22, 120, 9);
  color: white;
  /* margin: 17px; */
  font-size: 1.5rem;
  border-radius: 10px;
  cursor: pointer
}
        footer {
            
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

    <div class="historyone">
        <strong>BRICKS, BEADS AND BONES</strong>
        <h1>THE HARAPPAN CIVILIZATION</h1>
    </div>
<div class="text">
    <div id="harappaseal">
        <div class="leftside">
        <p>The <em> <strong>Harappan seal</strong> is possibly the most
            distinctive artefact of the Harappan or Indus valley
            civilisation. Made of a stone called steatite, seals
            like this one often contain animal motifs and signs
            from a script that remains undeciphered. </em> Yet we
            know a great deal about the lives of the people who
            lived in the region from what they left behind-their houses, pots, ornaments, tools and seals-in
            other words, from archaeological evidence. Let us
            see what we know about the Harappan civilisation,
            and how we know about it. We will explore how
            archaeological material is interpreted and how
            interpretations sometimes change. Of course, there
            are some aspects of the civilisation that are as yet
            unknown and may even remain so.
        </p>
    </div>
</div>
</div>


<a href="his_quiz.php"><button class="ebtn">Start your quiz</button></a>


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



</body>

</html>