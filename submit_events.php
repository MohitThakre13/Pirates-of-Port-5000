<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="submitblog.css">

    <title>Writing a blog</title>
</head>
<body>
<?php
      require_once('header.php');
    ?>
    <div class="content">
    <br><br><br>
    <div class="form-block">
    <form action = "submit_events.php" method = "post">
        <p><label for="event_name">event_name :</label>
        <input type="text" name="event_name" id="event_name" size = "44" /></p>

        <p><label for="type">type of event :</label>
        <input type="radio" name="type" id="type" value="u" checked />upcoming event<br>
        <input type="radio" name="type" id="type" value="p"  />past event</p>


        <p><label for="date_and_venue">date_and_venue :</label>
        <input type="text" name="date_and_venue" id="date_and_venue" size="44" /></p>

        <p><label for="content">content :</label>
        <textarea name="content" id="content"></textarea></p>

        <p><input type = "submit" name="submit"/></p>
    </form>

    <!-- writing the data to the database, if form is submitted -->
    
    <?php
    if (isset($_POST['submit'])) {
        if (strlen($_POST['event_name']) != 0 && strlen($_POST['content']) != 0) {

        //reading the form entries

        $event_name = $_POST['event_name'];
        // replacing the ' with \'
        $event_name = str_replace("'","\'",$event_name);
        $date_and_venue = $_POST['date_and_venue'];
        // replacing the ' with \'
        $date_and_venue = str_replace("'","\'",$date_and_venue);
        $content = $_POST['content'];
        // replacing the ' with \'
        $content = str_replace("'","\'",$content);
        $type = $_POST['type'];

        //making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "events";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn) {
            // writing entries to the blogs database
            $sql = "INSERT INTO `events` (`date_and_venue`, `event_name`, `type`, `content`) VALUES ('$date_and_venue', '$event_name', '$type', '$content')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "your event is saved in the database and will be displayed on the website.<br>";
            }
            else {
                echo "your event failed to enter the database, we regret for the inconvinience.<br>";
            }
        }
        else {
            die("connection with events database was unsuccessful : ".mysqli_connect_error());
        }}
    }
    ?>
    </div>
</div>
<div class="space"><div>
      <?php
        require_once('footer.php');
        ?>
    

</body>
</html>