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

 <b class="back"><a style = "color:white" href = "./blogs.php"><p class="arrow"> &#x2B05;  Back To Blog List </a></b></p>
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
                        <div class="round-edge">
                        <div class="topic-bg"><br>
                            <div class="blog-topic"><div class="shift-right"><b>'.$row['blog_topic'].'</b> </div></div>
                            <p class="author-date"><br>
                                -  <img src="images/m1.jpg" alt="A beautiful image"
                                class="image-frame">&nbsp;&nbsp;'.$row['topic_of_interest'].' 
                            <br><br>
                        
                    </div>
                    </p>
                    
                    <br>
                    <div class="blog-content">
                        <p class="content"><br> '.$row['content'].'
                
                            <br>
                    </div>
                </div>
                    <br><br>
                        ';
            }
        }
        else {
            die("connection with blogs database was unsuccessful : ".mysqli_connect_error());
        }
    ?>

    

    <?php
    require_once('footer.php');
    ?>

</body>

</html>