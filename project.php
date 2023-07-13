<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Projects</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Chakra+Petch:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="priject.css">
    <link rel="stylesheet" href="footer_styling.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<body>
    <nav class="header">
        <a href="home.html">
            <div class="logo">
                <img src="./Images/openLakeLogo.png" alt="">
                <h3>Openlake.</h3>
            </div>
        </a>

        <div class="mid-nav">
            <ul class="navopt">
                <li ><a href="homepage.php" id="home">Home</a></li>
                <li class="on-page"><a href="#" id="our-projects">Our Projects</a></li>
                <li><a href="#" id="community">Community</a></li>
                <li><a href="advice.php" id="mentors">Mentors</a></li>
            </ul>
        </div>

        <div class="right-nav">
            <ul>
                <li><a href="#subscribe" id="blog-btn">Blogs</a></li>
                <li><a href="#subscribe" id="subscribe-btn">Subscribe</a></li>
            </ul>
        </div>
    </nav>
    <nav class="header-mobile">

        <a href="#">
            <div class="logo">
                <img src="./Images/openLakeLogo.png" alt="">
                <h3>Openlake.</h3>
            </div>
        </a>

        <input class="side-menu" type="checkbox" id="side-menu" />
        <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>

        <nav class="nav">
            <ul class="menu">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="project.php">Our Projects</a> </li>
                <li><a href="#">Community</a> </li>
                <li><a href="advice.php">Mentors</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Subscribe</a></li>
            </ul>
        </nav>
    </nav>



    <br><br><br>
    <h1 id="larger" class="center">OUR PROJECTS</h1>

    <section class="our_projects"><div class="all-projects">
            
                <a href="projectpage.php"><span class="project-container">
                    <img src="./Images/atarangi.jpg" width="300px">
                    <h3 id="project-head">Antaragni-Web</h3>
                    The objective of this project was to update the android app Antaragni-App 15 making it more dynamic and user-friendly for the Antaragni-16, the Annual cultural festival of IITK. Major changes include integration with the online database of Antaragni. The App is available at Android Play Store.
                </span></a>

           
                <a href="projectpage.php"><span class="project-container">
                    <img src="./Images/battleground.jpg" width="300px">
                    <h3 id="project-head">WebWar</h3>
                    This is a single player air-fight based game built on Unity3D platform. The scripts were written in C# language using Microsoft Visual Studio
                </span></a>
           
                <a href="projectpage.php"><span class="project-container">
                <img src="./Images/Linux_logo.jpg" width="300px">
                <h3 id="project-head">Linux-Learner</h3>
                Here we will talk about the origins, versions, and predecessors of present-day Linux systems. Our story begins way back in 1969 with the development of UNIX.
</span></a>
            

        <a href="projectpage.php"><span class="project-container">
            <img src="./Images/music.jpeg" width="300px">
            <h3 id="project-head">Music Maze</h3>
            See music that friends are playing currently
            Private mode to hide currently playing music
            Music rooms - to livestream music to all users currently using the app and live updation of playlists        </div></a>
    
</span>    </section>

   

    <section id="subscribe">
        <h2 class="heading2">Subscribe our Newsletter</h2>
    
        <div class="box">
            <input type="text" name="box" id="input-box" placeholder="Email address">
            <button class="subscribe-btn">Subscribe</button>
        </div>
    </section>





    <?php
        require_once('footer.php');
    ?>
    
</body>

</html>