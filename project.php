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
    <link rel="stylesheet" href="./project.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<body>
    
    <?php
    require_once('header.php');
    ?>

    <br><br><br>
    <h1 id="larger" class="center">OUR PROJECTS</h1>

    <section class="our_projects">
        <div class="all-projects">
            
                <a href="projectpage.php"><span class="project-container">
                    <img id="image" src="./Images/atarangi.jpg" >
                    <h3 id="project-head">Antaragni-Web</h3>
                    <p class="para">The objective of this project was to update the android app Antaragni-App 15 making it more dynamic and user-friendly for the Antaragni-16, the Annual cultural festival of IITK. Major changes include integration with the online database of Antaragni. The App is available at Android Play Store.</p>
                </span></a>

           
                <a href="projectpage.php"><span class="project-container">
                    <img   id="image" src="./Images/battleground.jpg" >
                    <h3 id="project-head">WebWar</h3>
                    <p class="para">This is a single player air-fight based game built on Unity3D platform. The scripts were written in C# language using Microsoft Visual Studio</p>
                </span></a>
           
                <a href="projectpage.php"><span class="project-container">
                <img  id="image"  src="./Images/Linux_logo.jpg" >
                <h3 id="project-head">Linux-Learner</h3>
                <p class="para">Here we will talk about the origins, versions, and predecessors of present-day Linux systems. Our story begins way back in 1969 with the development of UNIX.</p>
                </span></a>
            

        <a href="projectpage.php"><span class="project-container">
            <img   id="image" src="./Images/music.jpeg" >
            <h3 id="project-head">Music Maze</h3>
            <p class="para">See music that friends are playing currently. Private mode to hide currently playing music. Music rooms - to livestream music to all users currently using the app and live updation of playlists </p>    
           </div></a>                                                                                
    
        </span>    
    </section>

   

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