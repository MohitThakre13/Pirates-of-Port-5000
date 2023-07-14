<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Past Events</title>

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
    <link rel="stylesheet" href="events.css">
    <link rel="stylesheet" href="footer_styling.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<body>
    
    <?php
    require_once('header.php');
    ?>

<br><br><br>
    <div class="comppage">
    <h1 class="blogtitle" id="heading">PAST EVENTS</h1>

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
                            <a href="./eventpage.php?sno='.$i.'">
                            <div class="anevent">
                            
                            <div class="subheading">'.$row['event_name'].'</div>
                            <div class="date">'.$row['date_and_venue'].'</div>
                            <br><div class="read">'.substr($row['content'],0,141)."...".'</div>
                             </div
                             ></a>
                        ';
                        }
                    }
                }
            }
        }
        else {
            die("connection with blogs database was unsuccessful : ".mysqli_connect_error());
        }
        echo'</div>';
    ?> 
    </section>

    <br><br>

    <?php
        require_once('footer.php');
    ?>
    
</body>

</html>