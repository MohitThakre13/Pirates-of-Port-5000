<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>

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
    <link rel="stylesheet" href="projectpage.css">
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
                <li><a href="#" id="our-projects">Our Projects</a></li>
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


<section class="projectpage">

<img src="./Images/atarangi.jpg" width="300px">

<h1 id="larger">Antaragni App 16</h1>

<h1 id="larger">Synopsis</h1>
The objective of this project was to update the android app Antaragni-App 15 making it more dynamic and user-friendly for the Antaragni-16, the Annual cultural festival of IITK. Major changes include integration with the online database of Antaragni. The App is available at Android Play Store
<h1 id="larger">Updates Included</h1>
Integrating Real-Time database<br>
Extending its support to API 24(permission access)<br>
Integrating Facebook Sign-in<br>
Updating Theme(Hues of Bliss)<br>
Various Bug fixes in Antaragni-App 15<br>
Inclusion of Google Map services<br>
Github Repositories<br>

Project-Ant : <a href="https://github.com/navya/Project-Ant">https://github.com/navya/Project-Ant<br>
Antaragni-App :<a href="https://github.com/kunalapila/Antaragni-App"> https://github.com/kunalapila/Antaragni-App<br>
<h1 id="larger">Project Timeline</h1>
At first changes were made to the Project-Ant repository during summers-16. Afterwards during mid-october work shifted to a new repository Antaragni-App using basic framework of Project-Ant in collaboration with the Updates.
           
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