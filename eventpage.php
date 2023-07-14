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

<?php
        
        //making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "events";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn) {
            // reading entries from blogs database
            $sql = "SELECT * FROM `events`";
            $result = mysqli_query($conn, $sql);

            //Initializing the count
            $i = 0;
            //counting total blogs
            if ($result) {
                    while(($row = mysqli_fetch_assoc($result))['s.no.'] != $_GET['sno']) {}
                        echo '
                        <img src="./Images/atarangi.jpg" width="300px">

                        <h1 id="larger">'.$row['event_name'].'</h1>
                        
                        <h1 id="larger">'.$row['date_and_venue'].'</h1>
                        '.$row['content'].'
                        ';
            }
        }
        else {
            die("connection with events database was unsuccessful : ".mysqli_connect_error());
        }
    ?>

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