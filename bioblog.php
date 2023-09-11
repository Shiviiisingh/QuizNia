<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/Blogs.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/common phone.css">




    <title>Biology</title>
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
            color:green;
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
#secondcontainer h1{
    font-size: 26px;
     color:green;
     text-decoration: underline;
}
#secondcontainer em{
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
        <strong>RESPIRATION IN PLANTS :</strong>
    </div>

    <div id="secondcontainer">
        <div class="para1">
            <h1><strong>I. Plant Respiration Overview</strong></h1>
            <li>Respiration is a necessary activity in all living species, including plants.
            </li>
            <li>The metabolic process that involves the exchange of gases, specifically the intake of oxygen (O2)
                and the release of carbon dioxide (CO2) during cellular respiration, is referred to as respiration in
                plants.
            </li>

            <li>Plants breathe in both the above-ground (aerial respiration) and below-ground (root respiration)
                sections of the plant.</li>
        </div>
        <br>
        <div class="para2">
            <h1><strong>II. Plant Respiration Process</strong></h1>
            <p>There are two forms of plant respiration: Aerobic respiration and Anaerobic respiration.</p>
            <li><em>Aerobic respiration:</em> The most prevalent type of plant respiration, in which
                glucose and oxygen are used to generate energy (in the form of ATP) in the presence of mitochondria.
            </li>
            <li><em>Anaerobic respiration: </em>occurs when there is no oxygen present and is less
                common in plants. It occurs in specialised tissues or in situations where oxygen is scarce, for as
                during flooding or waterlogging.</li>
        </div>
        <br>
        <div class="para3">
            <h1><strong>III. The Importance of Plant Respiration</strong></h1>
            <li type="i">Plant respiration is necessary for plant survival and growth because it supplies energy for
                cellular operations such as metabolism, growth, and reproduction.</li>
            <li>Respiration is also important in the carbon cycle because plants release carbon dioxide (CO2)
                during respiration, which is then utilised for photosynthesis by other living species.</li>
            <li>Plant respiration also regulates plant growth and development through regulating plant
                metabolism, food absorption, and stress responses.</li>
        </div>
        <br>
        <div class="para4">
           <h1> <strong>IV. Factors Influencing Plant Respiration</strong></h1>
            <li>Temperature, light, humidity, and nutrition availability are among elements that can influence plant respiration.</li>
            <li>Plant respiration often rises with increasing temperature because enzymes involved in respiration work more efficiently at higher temperatures.</li>
            <li> Excessive heat, on the other hand, can harm plant cells and impair respiration.</li>
            <li>Plant respiration can also be influenced by light, with some research indicating that respiration rates may be higher in the dark or during periods of low light intensity.</li>
            <li>Humidity levels can influence plant respiration because excessive humidity reduces gas diffusion, especially oxygen diffusion, and hence affects plant respiration rates.</li>
            <li>The availability of nutrients, particularly carbohydrates and oxygen, has an impact on plant respiration because it directly affects the availability of substrates for respiration.</li>
        </div>
        <br>
        <div class="para5">
           <h1> <strong>V. Conclusion</strong></h1>
            <li>Respiration is an important activity in plants because it provides energy for growth, metabolism, and reproduction.</li>
            <li>Understanding plant respiration, its kinds, importance, and the factors that influence it is critical for studying plant physiology and ecology.</li>
            <li>Plant respiration study can help us better understand how plants adapt to changing environmental conditions, as well as how to optimise plant growth and productivity in agricultural and horticulture practises.</li>
        </div>
    </div>

<a href="bio_quiz.php"><button class="ebtn">Start your quiz</button></a>



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