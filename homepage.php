<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Chakra+Petch:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="./homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php
      require_once('header.php');
    ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<?php
        if (isset($_POST['submit'])) {
            if (strlen($_POST['box']) != 0) {
                $email = $_POST['box'];
    
                //making connection with the database
    
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "emails";
    
                $conn = mysqli_connect($servername, $username, $password, $database);
    
                if ($conn) {
                    // writing entries to the blogs database
                    $sql = "INSERT INTO `emails` (`email`) VALUES ('$email')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
    
                        // add it as a flag
                        echo "You are successfully subscribed to the newsletter";
                    }
                    else {
                        echo "There is a technical issue<br>";
                    }
                }
                else {
                    die("There is a technical issue : ".mysqli_connect_error());
                }
            }
        }
        ?>
!
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

    <img src="./Images/arrow.png" alt="" id="arrow">
    <section class="main-intro-container">
        
            <a href="./past_events.php">
                <div id="past-event-button" class="event-button">Past Events</div>
            </a>
       
        <div id="logo-welcome-container">
            <img src="./Images/fossoverflow_3d.png" id="intro-logo" alt="error to load image">
            <div id="welcome-message">
                <div class="welcome-title">OPENLAKE WELCOMES YOU...</div>
                <div class="welcome-subtitle">Explore the developer within you</div>
            </div>
        </div>
        
        <a href="./upcoming_events.php">
            <div id="upcoming-event-button" class="event-button">Upcoming Events</div>
        </a>
        
    </section>


    <section class="openlake-intro">
        <h2 class="header-intro">Introduction</h2>
        <p class="intro-content" id="highlighted">Join this journey of software development . </p>
        <p class="intro-content">This is OpenLake, where we push branches and our limits,</p>
        <p class="intro-content"> Commit to repos as well creating efficient code, </p>
        <p class="intro-content">Checkout not only develop, but also the latest developments in tech!</p>
    </section>

    <section class="latest-blogs">
        <h2 class="heading1">Latest Blogs</h2>
        <hr>
        <div class="blogs-container">
            <div class="date">August 7, 2023</div>
            <div><a href="#" class="blog-heading" style="text-decoration:none;">Blog for Tech</a></div>
            <div class="subheading1">Tech world, AI, Data</div>
            <p class="content2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex expedita iure soluta
                ullam repudiandae modi dicta odit iusto sequi porro...</p>
            <a href="#" class="read-more">Click to <b>Read</b></a>
        </div>
        <hr>
        <div class="blogs-container">
            <div class="date">August 7, 2023</div>
            <div><a href="#" class="blog-heading" style="text-decoration:none;">Blog for Tech</a></div>
            <div class="subheading1">Tech world, AI, Data</div>
            <p class="content2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex expedita iure soluta
                ullam repudiandae modi dicta odit iusto sequi porro...</p>
            <a href="#" class="read-more">Click to <b>Read</b></a>
        </div>
        <hr>
        <div class="blogs-container">
            <div class="date">August 7, 2023</div>
            <div><a href="#" class="blog-heading" style="text-decoration:none;">Blog for Tech</a></div>
            <div class="subheading1">Tech world, AI, Data</div>
            <p class="content2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex expedita iure soluta
                ullam repudiandae modi dicta odit iusto sequi porro...</p>
            <a href="#" class="read-more">Click to <b>Read</b></a>
        </div>
        <hr>
        <div class="blogs-container">
            <div class="date">August 7, 2023</div>
            <div><a href="#" class="blog-heading" style="text-decoration:none;">Blog for Tech</a></div>
            <div class="subheading1">Tech world, AI, Data</div>
            <p class="content2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex expedita iure soluta
                ullam repudiandae modi dicta odit iusto sequi porro...</p>
            <a href="#" class="read-more">Click to <b>Read</b></a>
        </div>
        <hr>
        <div class="blogs-container">
            <div class="date">August 7, 2023</div>
            <div><a href="#" class="blog-heading" style="text-decoration:none;">Blog for Tech</a></div>
            <div class="subheading1">Tech world, AI, Data</div>
            <p class="content2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex expedita iure soluta
                ullam repudiandae modi dicta odit iusto sequi porro...</p>
            <a href="#" class="read-more">Click to <b>Read</b></a>
        </div>
        <hr>

    </section>

    <form action = "homepage.php" method = "post">
    <section id="subscribe">
        <h2 class="heading2">Subscribe our Newsletter</h2>
    
        <div class="box">
            <input type="email" name="box" id="input-box" placeholder="Email address">
            <button name="submit" class="subscribe-btn">Subscribe</button>
        </div>
    </section>
    </form>


    


        <?php
        require_once('footer.php');
        ?>
    
        
</body>

</html>