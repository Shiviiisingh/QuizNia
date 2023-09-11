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

    <title>Physics</title>

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
        <strong>UNLOCKING THE MYSTERIES OF THE UNIVERSE: EXPLORING THE FASCINATING WORLD OF PHYSICS</strong>
    </div>

    <br>

    <div id="secondcontainer">
        <div class="para1">
            <h1><strong>Introduction:</strong></h1>
            <li>Physics, the fundamental science that seeks to understand the laws governing the universe, holds the key
                to unlocking the mysteries of the cosmos.</li>
            <li>In this blog, we embark on a captivating journey into the world of physics, exploring its fundamental
                principles, groundbreaking discoveries, and the profound impact it has on our daily lives.</li>
            <li>Join us as we delve into the depths of the universe, unravel the secrets of matter and energy, and
                witness the beauty of nature's underlying principles.
            </li>
        </div>

        <div class="para2">
            <h1><strong>The Foundations of Physics: Building Blocks of the Universe</strong></h1>
            <li>At the core of physics lies the quest to understand the fundamental building blocks of matter and the
                forces that govern their interactions.At the core of physics lies the quest to understand the
                fundamental building blocks of matter and the forces that govern their interactions.</li>
            <li>Explore the subatomic world of particles, including protons, neutrons, and electrons, and learn about
                the remarkable discoveries of quantum mechanics. </li>
            <li>Discover the four fundamental forces—gravity, electromagnetism, and the strong and weak nuclear
                forces—that shape the dynamics of the universe.</li>
        </div>

        <div class="para3">
            <h1><strong>The Marvels of Classical Mechanics: Unleashing the Laws of Motion</strong></h1>
            <li>Classical mechanics, formulated by Sir Isaac Newton, laid the groundwork for our understanding of motion
                and the behavior of objects.</li>
            <li>Dive into the principles of classical mechanics, including Newton's laws of motion and the conservation
                of energy and momentum.</li>
            <li>Explore the applications of classical mechanics in fields such as engineering, astronomy, and sports,
                and witness how it governs the movement of celestial bodies.</li>
        </div>

        <div class="para4">
            <h1><strong>The Quantum Revolution: Exploring the Realm of the Very Small</strong></h1>
            <li>Quantum mechanics revolutionized our understanding of the microscopic world, challenging our intuitions
                and revealing the wave-particle duality of matter and energy.</li>
            <li>Embark on a journey into the strange and fascinating realm of quantum mechanics, from wave-particle
                duality to quantum entanglement and superposition.</li>
            <li>Explore the impact of quantum physics on technologies like computers, lasers, and cryptography.
            </li>
        </div>

        <div class="para5">
            <h1><strong>Einstein's Relativity: Unraveling the Nature of Space and Time</strong></h1>
            <li>Albert Einstein's theory of relativity transformed our understanding of the fabric of the universe.</li>
            <li>Explore the concepts of special and general relativity, which describe the behavior of objects moving at
                high speeds or in the presence of strong gravitational fields.</li>
            <li>Discover the mind-bending effects of time dilation, length contraction, and the bending of light. </li>
            <li>Discuss the evidence supporting the theory, such as gravitational waves.</li>
        </div>

        <div class="para6">
            <h1><strong>Exploring the Cosmos: Astronomy and Astrophysics</strong></h1>
            <li>Physics plays a crucial role in unraveling the mysteries of the cosmos. </li>
            <li>Delve into the field of astrophysics, investigating the properties of stars, galaxies, and black holes.
            </li>
            <li>Learn about the Big Bang theory, cosmic microwave background radiation, and the study of dark matter and
                dark energy.</li>
            <li>Discover how astronomical observations and models contribute to our understanding of the origins and
                evolution of the universe.</li>
        </div>

        <div class="para7">
            <h1><strong>Conclusion:</strong></h1>
            <li>Physics offers us a fascinating journey of exploration and discovery, from the subatomic realm to the
                vast expanses of the cosmos.</li>
            <li>By unraveling the fundamental principles that govern matter, energy, and the forces of nature, we gain
                insights into the workings of the universe and the technological marvels that shape our modern world.
            </li>
            <li>Physics empowers us to ask profound questions, seek answers, and push the boundaries of human knowledge.
            </li>
            <li>So let us embrace the wonders of physics, igniting our curiosity and inspiring us to explore the
                mysteries of the universe.</li>
        </div>
    </div>
    
    <a href="phy_quiz.php"><button class="ebtn">Start your quiz</button></a>

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