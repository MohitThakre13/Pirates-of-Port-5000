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
    <link rel="stylesheet" href="events.css">
    <link rel="stylesheet" href="footer_styling.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<body>
<?php
    require_once('header.php');
    ?>


    <br><br>


<section class="comppage">

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
                        <br><br>
                        <div class="eventhead">'.$row['event_name'].'</div>
                        <br>
                        <div class="eventsubheading">'.$row['date_and_venue'].'</div>
                        <br><br>
                        <div class="contentcontainer">
                        '.$row['content'].'
                        </div>
                        <br><br>
                        ';
            }
        }
        else {
            die("connection with events database was unsuccessful : ".mysqli_connect_error());
        }
    ?>

</section>

    <?php
        require_once('footer.php');
    ?>
    
</body>

</html>