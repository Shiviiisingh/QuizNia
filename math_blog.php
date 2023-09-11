<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/common phone.css">

    <title>Mathematics</title>

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

        .firstcontainer {
            /* border: 2px solid red; */
            text-align: left;
            margin: 28px;
            font-size: 40px;
            font-family: 'Bree Serif', serif;
            height: auto;
            margin-top: 10px;
            padding: 33px;
            border-radius: 19px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            text-decoration: underline;
            color: green;
        }

        #secondcontainer {
            /* border: 2px solid olive; */
            font-family: 'Bree Serif', serif;
            height: auto;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            border-radius: 19px;
            margin: 28px;
            padding: 60px;
            font-size: 18px;

        }

        #secondcontainer h1 {
            font-size: 26px;
            color: green;
            text-decoration: underline;
        }

        #secondcontainer em {
            color: dimgray;
            font-size: 20px;
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
    </nav>

    <div class="firstcontainer">
        <strong>Unleashing the Power of Numbers: Exploring the Fascinating World of Mathematics
        </strong>
    </div>

    <br>

    <div id="secondcontainer">

        <div class="para1">
            <h1><strong>Introduction:</strong></h1>
            <li>Mathematics, the universal language of logic and precision, shapes our understanding of the world and
                plays a crucial role in countless disciplines.</li>
            <li>In this blog, we embark on a captivating journey into the world of mathematics, exploring its
                fundamental concepts, mind-boggling puzzles, and the profound impact it has on our daily lives.</li>
            <li>Join us as we unravel the mysteries of numbers, dive into the depths of geometry, and witness the
                elegance of mathematical reasoning.</li>
        </div>

        <div class="para2">
            <h1><strong>The Beauty of Numbers: From Counting to Infinity</strong></h1>
            <li>Numbers are the foundation of mathematics, unlocking the potential for endless exploration.</li>
            <li>We will explore the number system, from whole numbers to fractions, decimals, and beyond.</li>
            <li>Discover the captivating properties of prime numbers, explore the wonders of irrational numbers, and
                delve into the concept of infinity.</li>
            <li>Witness the beauty of mathematical patterns and the intricate connections between different types of
                numbers.</li>
        </div>

        <div class="para3">
            <h1><strong>Algebra: Solving Equations and Unveiling Patterns</strong></h1>
            <li>Algebra is a powerful tool for understanding relationships and solving problems.</li>
            <li>Explore the language of algebra, from basic equations to complex systems of equations.</li>
            <li>Investigate the properties of functions, inequalities, and logarithms. </li>
            <li>Discover how algebraic concepts are used in real-world scenarios, such as modeling growth, analyzing
                data, and optimizing resources.</li>
        </div>

        <div class="para4">
            <h1><strong>Geometry: The Visual Language of Shapes and Space</strong></h1>
            <li>Geometry brings mathematics to life through the study of shapes, figures, and spatial relationships.
            </li>
            <li>Dive into Euclidean geometry, exploring concepts such as points, lines, angles, and triangles.</li>
            <li>Venture into the world of polygons, circles, and three-dimensional shapes.</li>
            <li>Discuss the significance of symmetry, transformations, and the Pythagorean theorem.</li>
            <li>Explore the intersections between geometry and real-world applications, such as architecture, art, and
                navigation.</li>
        </div>

        <div class="para5">
            <h1><strong>Calculus: Unraveling the Dynamic World of Change</strong></h1>
            <li>Calculus provides a powerful toolkit for understanding change and analyzing complex phenomena.</li>
            <li>Explore differential calculus, investigating rates of change and derivatives.</li>
            <li>Dive into integral calculus, understanding the concept of accumulation and the calculation of areas and
                volumes.</li>
            <li>Discover the applications of calculus in physics, engineering, economics, and other fields, allowing us
                to model and predict real-world phenomena.</li>
        </div>

        <div class="para6">
            <h1><strong>The Power of Mathematical Reasoning: Logic and Proof</strong></h1>
            <li>Mathematics is built on a foundation of rigorous reasoning and proof.</li>
            <li>Explore the principles of mathematical logic, including deductive reasoning and mathematical induction.
            </li>
            <li>Discover the art of constructing and evaluating mathematical proofs, understanding the importance of
                logical arguments and clear communication.</li>
            <li>Discuss the impact of mathematical proof in advancing knowledge and building confidence in mathematical
                results.</li>
        </div>

        <div class="para1">
            <h1><strong>Conclusion:</strong></h1>
            <li>Mathematics is a gateway to understanding the world's patterns, structures, and relationships.</li>
            <li>By exploring the beauty of numbers, unraveling geometric mysteries, harnessing the power of algebra and
                calculus, and embracing logical reasoning, we can unlock the immense potential of mathematics.</li>
            <li>It empowers us to solve problems, make informed decisions, and innovate across various fields.</li>
            <li>So let us embark on this journey of exploration and discovery, igniting our curiosity and appreciation
                for the boundless wonders of mathematics.</li>
        </div>

    </div>

    <a href="maths_quiz.php"><button class="ebtn">Start your quiz</button></a>

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