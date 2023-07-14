<?php

//making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username, $password);

        if ($conn) {
           //creating a database
           $sql = "CREATE DATABASE blogs";
           $result = mysqli_query($conn, $sql);

           if ($result){
            echo "blogs database created successfully<br>";
           }
        }
        else {
            die("connection with blogs database was unsuccessful : ".mysqli_connect_error());
        }

        //making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "blogs";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn) {
            $sql = "CREATE TABLE `blogs` (`s.no.` INT(11) NOT NULL AUTO_INCREMENT , `date` TEXT NOT NULL , `blog_topic` TEXT NOT NULL , `topic_of_interest` TEXT NOT NULL , `content` TEXT NOT NULL , PRIMARY KEY (`s.no.`))";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "blogs table created successfully";
            }
           }
        else {
            die("connection with blogs database was unsuccessful : ".mysqli_connect_error());
        }
    ?>