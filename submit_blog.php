<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing a blog</title>
</head>
<body>
<?php
      require_once('header.php');
    ?>
    <br><br><br>
    <div class="form-block">
    <form action = "submit_blog.php" method = "post">
        <p><label for="blog_topic">Blog Topic :</label>
        <input type="text" name="blog_topic" id="blog_topic" size = "44" /></p>

        <p><label for="topic_of_interest">Topic of Interest :</label>
        <input type="text" name="topic_of_interest" id="topic_of_interest" size="44" /></p>

        <p><label for="content">Content :</label>
        <textarea name="content" id="content"></textarea></p>

        <p><input type = "submit" name="submit"/></p>
    </form>

    <!-- writing the data to the database, if form is submitted -->
    
    <?php
    if (isset($_POST['submit'])) {
        if (strlen($_POST['blog_topic']) != 0 && strlen($_POST['content']) != 0) {

        //reading the form entries

        $blog_topic = $_POST['blog_topic'];
        // replacing the ' with \'
        $blog_topic = str_replace("'","\'",$blog_topic);
        $topic_of_interest = $_POST['topic_of_interest'];
        // replacing the ' with \'
        $topic_of_interest = str_replace("'","\'",$topic_of_interest);
        $content = $_POST['content'];
        // replacing the ' with \'
        $content = str_replace("'","\'",$content);
        $date = date("F j, Y");

        //making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "blogs";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn) {
            // writing entries to the blogs database
            $sql = "INSERT INTO `blogs` (`date`, `blog_topic`, `topic_of_interest`, `content`) VALUES ('$date', '$blog_topic', '$topic_of_interest', '$content')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "your blog is saved in the database and will be displayed on the website.<br>";
            }
            else {
                echo "your blog failed to enter the database, we regret for the inconvinience.<br>";
            }
        }
        else {
            die("connection with blogs database was unsuccessful : ".mysqli_connect_error());
        }}
    }
    ?>

</body>
</html>