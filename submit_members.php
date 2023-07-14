<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="submitblog.css">

    <title>Entry of the members</title>
</head>
<body>
<?php
      require_once('header.php');
    ?>
    <div class="content">
    <br><br><br>
    <div class="form-block">
    <form action = "submit_members.php" method = "post">
        <p><label for="name">Member name :</label>
        <input type="text" name="name" id="name" size = "44" /></p>

        <p><label for="position">His/her Position (write "Coordinator", if it is coordinator) :</label>
        <input type="text" name="position" id="position" size="44" /></p>

        <p><label for="linkedin">Linkedin ID link :</label>
        <input type="text" name="linkedin" id="linkedin" size="44" /></p>

        <p><label for="insta">Insta ID link :</label>
        <input type="text" name="insta" id="insta" size="44" /></p>

        <p><input type = "submit" name="submit"/></p>
    </form>

    <!-- writing the data to the database, if form is submitted -->
    
    <?php
    if (isset($_POST['submit'])) {
        if (strlen($_POST['name']) != 0 && strlen($_POST['position']) != 0) {

        //reading the form entries

        $name = $_POST['name'];
        // replacing the ' with \'
        $name = str_replace("'","\'",$name);
        $position = $_POST['position'];
        // replacing the ' with \'
        $position = str_replace("'","\'",$position);
        $linkedin = $_POST['linkedin'];
        // replacing the ' with \'
        $linkedin = str_replace("'","\'",$linkedin);
        $insta = $_POST['insta'];
        // replacing the ' with \'
        $insta = str_replace("'","\'",$insta);

        //making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "community";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn) {
            // writing entries to the blogs database
            $sql = "INSERT INTO `community` (`name`, `position`, `linkedin` , `insta`) VALUES ('$name', '$position', '$linkedin', '$insta')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "the member is saved in the database and will be displayed on the website.<br>";
            }
            else {
                echo "the member's entry failed to enter the database, we regret for the inconvinience.<br>";
            }
        }
        else {
            die("connection with community database was unsuccessful : ".mysqli_connect_error());
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