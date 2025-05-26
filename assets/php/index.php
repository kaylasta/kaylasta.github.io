<?php
    session_start();
    include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Oliver Staddon | Home</title>

    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/style.css">

    <script src="../scripts/stars.js"></script> 
    <script src="../scripts/loginStatus.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="./index.php" class="logo">Oliver</a>
            <ul class="nav-links">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./projects.php">Projects</a></li>
                <li class="dropdown">
                    <a href="./viewBlog.php">Blog</a>
                    <div class="dropdown-content" id="blog-dropdown">
                        <a href="../pages/login.html">Login</a>
                    </div>
                    <li><a href="#contact">Contact</a></li>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="home-page" id="home-page">
            <div class="home-info-container">
                <h1 class="heading-home">Home</h1>
                <p class="home-info">Hello hello, welcome to my page. <br>
                    Here you can find out about me and my work. I hope you enjoy your stay &lt3
                </p>
                    <a href="#about-me" class="page-btn">About me</a>
            </div>
        </section>

        <section class="content-page" id="about-me">
            <div class="content-container">
                    <h2 class="heading-content">About me</h2>
                    <span class="heading-content-sub">All about me</span>

                <div class="content-info">
                    <div class="content-info-left">
                        <h3 class="content-info-left-header">Who am I?</h3>
                        <p>I am a student currently studying Computer Science at Queen Mary University London. 
                            I have a passion for programming, specifically procedural generation systems. 
                            In my free time, I like to explore new technologies and work on personal projects to enhance
                            my skills. I am an avid player of the piano and enjoy playing tennis. I also have a keen 
                            interest in films, music, and anime. I love exploring different genres and discovering
                            new favorites.
                        </p>
                        <figure>
                            <img src="../imgs/miku.gif" alt="Oliver Staddon" width="150" height="150">
                            <figcaption>This is not me</figcaption>
                        </figure>
                    </div>

                    <div class="content-info-right">
                        <h3 class="content-info-right-header">Skills</h3>
                        <div class="skills-box">
                            <table class="skills-table">
                                <tr>
                                    <td><img src="../imgs/svgs/C_sharp.svg" alt="C#"></td>
                                    <td><img src="../imgs/svgs/C++.svg" alt="C++"></td>
                                    <td><img src="../imgs/svgs/java.svg" alt="Java"></td>
                                    <td><img src="../imgs/svgs/python.svg" alt="Python"></td>
                                </tr>
                                <tr>
                                    <td><img src="../imgs/svgs/HTML5.svg" alt="HTML5"></td>
                                    <td><img src="../imgs/svgs/css3.svg" alt="CSS3"></td>
                                    <td><img src="../imgs/svgs/javaScript.svg" alt="JavaScript"></td>
                                    <td><img src="../imgs/svgs/php.png" alt="php"></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
                <a href="#experience" class="page-btn">Experience</a>

            </div>
        </section>

        <section class="content-page" id="experience">
            <div class="content-container">
                    <h2 class="heading-content">Experience and qualifications</h2>
                    <span class="heading-content-sub">Find out what I have done and achieved</span>

                    <div class="content-info-gridless">
                        <div class="timeline">
                            <div class="timeline-bar">
                                <div class="timeline-year" style="left: 0%;"><span class="timeline-year-label">2000</span></div>
                                <div class="timeline-year" style="left: 22.5%;"><span class="timeline-year-label">2010</span></div>
                                <div class="timeline-year" style="left: 45%;"><span class="timeline-year-label">2015</span></div>
                                <div class="timeline-year" style="left: 50%;"><span class="timeline-year-label">2016</span></div>
                                <div class="timeline-year" style="left: 55%;"><span class="timeline-year-label">2017</span></div>
                                <div class="timeline-year" style="left: 60%;"><span class="timeline-year-label">2018</span></div>
                                <div class="timeline-year" style="left: 65%;"><span class="timeline-year-label">2019</span></div>
                                <div class="timeline-year" style="left: 70%;"><span class="timeline-year-label">2020</span></div>
                                <div class="timeline-year" style="left: 75%;"><span class="timeline-year-label">2021</span></div>
                                <div class="timeline-year" style="left: 80%;"><span class="timeline-year-label">2022</span></div>
                                <div class="timeline-year" style="left: 85%;"><span class="timeline-year-label">2023</span></div>
                                <div class="timeline-year" style="left: 90%;"><span class="timeline-year-label">2024</span></div>
                                <div class="timeline-year" style="left: 95%;"><span class="timeline-year-label">2025</span></div>

                                <!--experience here. use style % from above for alignment-->
                                <div class="timeline-section" style="left: 59%;">
                                    <div class="timeline-description">Recieved grade 1 piano</div>
                                </div>
                                <div class="timeline-section" style="left: 82%;">
                                    <div class="timeline-description">10 GCSEs</div>
                                </div>
                                <div class="timeline-section" style="left: 87%;">
                                    <div class="timeline-description">Week at Stevenson Brothers</div>
                                </div>
                                <div class="timeline-section" style="left: 92%;">
                                    <div class="timeline-description">3 A levels + EPQ</div>
                                </div>
                            </div>
                        </div>
                    </div>

                <a href="#education" class="page-btn">Education</a>
            </div>
            
        </section>


        <section class="content-page-bottom" id="education">
            <div class="content-container">
                    <h2 class="heading-content">Education</h2>
                    <span class="heading-content-sub">Currently studying at Queen Mary University of London</span>

                <div class="content-info">
                    <div class="content-info-left">
                        <h3 class="content-info-left-header">What have I learned?</h3>
                        <p>My time at The Norton Knatchbull School and Queen Mary University of London has taught me a lot. 
                            I have learned a variety of programming languages and have developed a strong understanding of 
                            computer science concepts. The knowledge i have gained is not only limited in the field of computer science
                            as I have also learned how to work in a team, effective time management, and critical thinking skills.
                        </p>
                    </div>

                    <div class="content-info-right">
                        <h3 class="content-info-right-header">Places of study</h3>
                        <div class="skills-box">
                            <table class="skills-table">
                                <tr>
                                    <td>
                                        <div class="education-section">
                                            <img src="../imgs/QMUL.jpg" alt="QMUL">   
                                            <div class="education-description">QMUL | BSc Computer Science (Current)</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="education-section">
                                            <img src="../imgs/NKS.jpg" alt="NKS">
                                            <div class="education-description">The Norton Knatchbull School | 10 GCSEs, 3 A levels & EPQ</div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            
        </section>

        <section class="center-img">
            <img src="../imgs/kyubey.gif" width="125" height="125" alt="Kyubey">
        </section>
    </main>

    <footer class="footer" id="contact">
        <a href="https://www.linkedin.com/in/oliverstaddon/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 310 310">
                <path d="
                    M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73
                    C77.16,101.969,74.922,99.73,72.16,99.73z
                "/>
                <path d="
                    M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4
                    c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z
                "/>
                <path d="
                    M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599
                    c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319
                    c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995
                    C310,145.43,300.549,94.761,230.454,94.761z
                "/>
            </svg>
        </a>
        
        <a href="https://github.com/oliverstaddon" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 98 96">
                <path d="
                    M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 
                    2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 
                    2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 
                    4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 
                    1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 
                    5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 
                    46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 
                    13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 
                    0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 
                    11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 
                    22 75.788 0 48.854 0z
                "/>
            </svg>
        </a>
        <p><a href="mailto:orstaddon@live.co.uk">orstaddon@live.co.uk</a></p>
    </footer>

</body>
</html>