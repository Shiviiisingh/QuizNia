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

    <title>Geology</title>

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
        </ul>
    </nav>

    <div class="firstcontainer">
        <strong>
            EXPLORING THE WONDERS OF GEOGRAPHY: UNVEILING THE EARTH's DIVERSITY
        </strong>
    </div>

    <div id="secondcontainer">
        <div class="para1">
            <h1><strong>Introduction</strong></h1>
            <li>Geography is a captivating field that unravels the beauty and complexity of our planet. It goes far
                beyond simply memorizing countries, capitals, and landforms.
            </li>
            <li>Geography encompasses the study of Earth's physical features, climate patterns, human societies, and
                the intricate relationships between them.
            </li>
            <li>Join us on a thrilling journey as we delve into the fascinating world of geography, uncovering its
                wonders and highlighting its significance in our lives.
            </li>
        </div>

        <br>

        <div class="para2">
            <h1><strong>The Power of Maps: Navigating Our World</strong></h1>
            <li><em>Maps</em> are the key to understanding and navigating our planet. </li>
            <li>Discover the history of cartography, from ancient maps to modern GPS systems, and understand how
                maps have shaped our perception of the world.</li>
            <li>Explore the different types of maps and their uses, from topographic maps for hikers to thematic
                maps depicting population density, climate zones, and more.</li>
        </div>

        <div class="para3">
            <h1><strong>Earth's Dynamic Landscapes: Unveiling Nature's Masterpieces</strong></h1>
            <li>From majestic mountains to sprawling deserts, Earth's landscapes are a testament to the powerful
                forces shaping our planet.</li>
            <li>Learn about the geological processes that form diverse landforms, such as plate tectonics, erosion,
                and volcanic activity.</li>
            <li>Journey through iconic natural wonders, including the Grand Canyon, the Amazon Rainforest, and the
                Great Barrier Reef, and understand their ecological significance.</li>
        </div>

        <div class="para3">
            <h1><strong>Weather and Climate: Unraveling Atmospheric Mysteries</strong></h1>
            <li>Weather and climate play a pivotal role in shaping human societies and ecosystems</li>
            <li>Gain insights into the factors influencing weather patterns, such as air pressure, temperature,
                humidity, and wind.</li>
            <li>Dive into the study of climatology and explore the diverse climate zones across the globe, from
                tropical rainforests to arid deserts.</li>
            <li>Discuss the impact of climate change and the efforts to mitigate its effects.</li>
        </div>

        <div class="para4">
            <h1><strong>Human Geography: Understanding the Human Tapestry</strong></h1>
            <li>Human geography examines the relationships between people, societies, and the environment. Explore
                population dynamics, urbanization, migration patterns, and cultural landscapes.</li>
            <li>Learn how factors like language, religion, politics, and economics shape societies and contribute to
                global interconnectedness. </li>
            <li>Discover how geographers analyze human-environment interactions and work towards sustainable
                development.</li>
        </div>

        <div class="para5">
            <h1><strong>Geopolitics: The Intersection of Geography and Politics</strong></h1>
            <li>Geography has a significant impact on political dynamics and international relations.</li>
            <li>Investigate the concept of geopolitics and its influence on conflicts, alliances, and territorial
                disputes.</li>
            <li>Examine how geography shapes resource distribution, access to waterways, and strategic military
                considerations. </li>
            <li>Understand how geographical factors influence the balance of power in different regions.</li>
        </div>

        <div class="para6">
            <h1><strong>Conclusion:</strong></h1>
            <li>Geography unveils the wonders of our planet, highlighting the intricate relationships between the
                physical environment and human societies.</li>
            <li>From the awe-inspiring landscapes to the dynamic weather patterns and the complex tapestry of
                cultures, geography provides us with a deeper understanding of the world we inhabit.</li>
            <li>By studying geography, we gain insights into the challenges and opportunities that lie ahead,
                empowering us to make informed decisions and work towards a sustainable future for our planet.</li>
            <li>So let us embrace the marvels of geography and embark on a lifelong journey of exploration and
                discovery.</li>
        </div>
    </div>

    <a href="geo_quiz.php"><button class="ebtn">Start your quiz</button></a>

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