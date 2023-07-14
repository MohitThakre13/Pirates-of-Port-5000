<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blog1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>BLOG <?php echo $_GET['sno']?></title>
</head>

<body>
    <?php
    require_once('header.php');
    ?>
<div class="comppage">
    <b class="back">
    <a style = "color:white" href = "./blogs.php">
        <p class="back-btn"> &#x2B05;  Back To Blog List </p>
    </a>
    </b>
<br><br>
<br><br>
<?php
        
        //making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "blogs";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn) {
            // reading entries from blogs database
            $sql = "SELECT * FROM `blogs`";
            $result = mysqli_query($conn, $sql);

            //Initializing the count
            $i = 0;
            //counting total blogs
            if ($result) {
                    while(($row = mysqli_fetch_assoc($result))['s.no.'] != $_GET['sno']) {}
                        echo '
                        <div class="blogtitle">
                         <br>
                         <div class="heading">
                            <b>'.$row['blog_topic'].'</b> 
                        </div
                           <br>
                                <div class="subheading">'.$row['topic_of_interest'].' </div>
                            
                            <br><br> 
                    </div>
                    
                    <br>
                        <div class="contentcontainer"><br> '.$row['content'].'</div>

                    <br><br>
                        ';
            }
        }
        else {
            die("connection with blogs database was unsuccessful : ".mysqli_connect_error());
        }
        echo'</div>';
    ?>
    
    <br><br>
    <?php
    require_once('footer.php');
    ?>

</body>

</html>