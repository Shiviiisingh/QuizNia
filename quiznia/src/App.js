import React, { useState } from 'react';
// import 'bootstrap/dist/css/bootstrap.css';

import './App.css'; // Import your CSS file here

function App() {
  const [isListVisible, setListVisible] = useState(true);

  const toggleListVisibility = () => {
    setListVisible(!isListVisible);
  };

  return (
    <div>
      <nav id="navbar">
        {/* Navigation content */}
        <div id="logo">
            <a href="index.html">
                <img src="logo.jpg" alt="QuizNia.in"/>
            </a>
        </div>
        <ul>
            <li class="item"><a href="index.html">Home</a></li>
            <li class="item"><a href="#">Courses</a></li>
            <li class="item"><a href="#">Quizzes</a></li>
            <li class="item"><a href="#">Contact Us</a></li>
        </ul>
      </nav>

      <div className="container1">
        <div className="content">
          <em>
            <p>
              <strong>VOCABULARY</strong>Vocabulary refers to the set of words and terms that a person knows and
              understands in a particular language.
            </p>
          </em>
        </div>
      </div>

      <br />

      <div className="mid">
        <div id="list" style={{ display: isListVisible ? 'block' : 'none' }}>
          {/* List of words and meanings */}
          <strong>
                <h1>List of words</h1>
            </strong>
           
            <h2 class="word">1.Consider</h2>
            <em>
                <p class="meaning"> deem to be </p>
            </em>
            <p> At the moment, artemisinin-based therapies are considered the best treatment, but cost about $10 per
                dose - far too much for impoverished communities</p>
           
            <br/>

            <h2 class="word">2. minute</h2>
            <em>
                <p class="meaning">infinitely or immeasurably small</p>
            </em>
            <p> The minute stain on the document was not visible to the naked eye.</p>
            <br/>

            <h2 class="word">3. accord</h2>
            <em>
                <p class="meaning">concurrence of opinion</p>
            </em>
            <p>The committee worked in accord on the bill, and it eventually passed</p>
            <br/>

            <h2 class="word">4. evident</h2>
            <em>
                <p class="meaning">clearly revealed to the mind or the senses or judgment</p>
            </em>
            <p>That confidence was certainly evident in the way Smith handled the winning play with 14 seconds left on
                the
                clock. </p>
            <br/>

            <h2 class="word">5. practice</h2>
            <em>
                <p class="meaning">a customary way of operation or behavior</p>
            </em>
            <p>He directed and acted in plays every season and became known for exploring Elizabethan theatre practices.
            </p>
            <br/>

            <h2 class="word">6. intend</h2>
            <em>
                <p class="meaning">have in mind as a purpose</p>
            </em>
            <p>“Lipstick, as a product intended for topical use with limited absorption, is ingested only in very small
                quantities,” the agency said on its website.</p>
            <br/>

            <h2 class="word">7. concern</h2>
            <em>
                <p class="meaning">something that interests you because it is important</p>
            </em>
            <p>The scandal broke out in October after former chief executive Michael Woodford claimed he was fired for
                raising concerns about the company's accounting practices.</p>
            <br/>

            <h2 class="word">8. commit</h2>
            <em>
                <p class="meaning">perform an act, usually with a negative connotation</p>
            </em>
            <p>In an unprecedented front page article in 2003 The Times reported that Mr. Blair, a young reporter on its
                staff, had committed journalistic fraud.</p>
            <br/>

            <h2 class="word">9. issue</h2>
            <em>
                <p class="meaning">some situation or event that is thought about</p>
            </em>
            <p>As a result, the privacy issues surrounding mobile computing are becoming ever-more complex.</p>
            <br/>

            <h2 class="word">10. approach</h2>
            <em>
                <p class="meaning">move towards</p>
            </em>
            <p>Spain's jobless rate for people ages 16 to 24 is approaching 50 percent.</p>
            <br/>
        </div>
      </div>
      <button
        id="btn"
        onClick={toggleListVisibility}
      >
        Show/Hide
      </button>
      <br />

      <footer className="text-gray-600 body-font">
        {/* Footer content */}
        <div
            class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    
                    <img src="logo.jpg" alt="QuizNia.in"/>
                    <span class="ml-3 text-xl">QuizNia</span>
                </a>
                <p class="mt-2 text-sm text-gray-500">One Stop For Quizzes</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Us</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">About Us</a>
                        </li>
                        
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Resources</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Articals</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Blogs</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">CheatSheet</a>
                        </li>
                        
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Community</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Forums</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Chapters</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Discord</a>
                        </li>
                        
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Subjects</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">English</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Science</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">General-studies</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Maths</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Reasoning</a>
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
    </div>
  );
}

export default App;
