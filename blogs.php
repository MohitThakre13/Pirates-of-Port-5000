<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    

    <link rel="stylesheet" href="./blogs.css">

</head>

<body>

    
    
    
    <?php
      require_once('header.php');
    ?>

    <section class="latest-blogs">
            <h2 class="heading1">Blogs List</h2>
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
            if ($result) {
                if ($num > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
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

    <?php
        require_once('footer.php');
    ?>
    
</body>
</html>