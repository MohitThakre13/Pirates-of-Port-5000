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
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="footer_styling.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<body>
    
    <?php
    require_once('header.php');
    ?>

    <br><br><br>
    <h1 id="larger" class="center">PAST EVENTS</h1>

    <section class="our_projects">
        <div class="all-projects">

        <?php
        
        //making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "events";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn) {
            // reading entries from events database
            $sql = "SELECT * FROM `events`";
            $result = mysqli_query($conn, $sql);

            //Initializing the count
            $i = 0;
            //counting total blogs
            $num = mysqli_num_rows($result);
            if ($result) {
                if ($num > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $i++;
                        if ($row['type'] == "p"){
                        echo '
                            <a href="./eventpage.php?sno='.$i.'"><span class="project-container">
                            <img id="image" src="./Images/atarangi.jpg" >
                            <h3 id="project-head">'.$row['event_name'].'</h3>
                            <p class="para">'.$row['date_and_venue']."<br><br>".substr($row['content'],0,141)."...".'</p>
                             </span></a>
                        ';
                        }
                    }
                }
            }
        }
        else {
            die("connection with blogs database was unsuccessful : ".mysqli_connect_error());
        }
    ?>
            
                           </div>    
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