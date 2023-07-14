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
    
    
</head>
<body>


    <?php
      require_once('header.php');
    ?>
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
    <?php
        
        //making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "blogs";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn) {
            // reading entries from blogs database
            $sql = "SELECT * FROM `blogs` ORDER BY `s.no.` DESC";
            $result = mysqli_query($conn, $sql);


            //counting total blogs
            $num = mysqli_num_rows($result);

            //Initializing the count
            $i = 0;

            if ($result) {
                if ($num > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $i++;
                        if ($i > 5){
                            echo "<br><br>";break;
                        }
                        echo '
                        <div class="blogs-container">
                        <div class="date">'.$row['date'].'</div>
                        <div><a href="#" class="blog-heading" style="text-decoration:none;">'.$row['blog_topic'].'</a></div>
                        <div class="subheading1">'.$row['topic_of_interest'].'</div>
                        <p class="content2">'.substr($row['content'],0,141)."...".'</p>
                        <a href="./blog1.php?sno='.$row['s.no.'].'" class="read-more">Click to <b>Read</b></a>
                    </div>
                    <hr>
                        ';
                    }
                }
            }
        }
        else {
            die("connection with blogs database was unsuccessful : ".mysqli_connect_error());
        }
    ?>
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