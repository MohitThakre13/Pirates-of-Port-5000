<?php

//making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username, $password);

        if ($conn) {
           //creating a database
           $sql = "CREATE DATABASE events";
           $result = mysqli_query($conn, $sql);

           if ($result){
            echo "events database created successfully<br>";
           }
        }
        else {
            die("connection with events database was unsuccessful : ".mysqli_connect_error());
        }

        //making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "events";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn) {
            $sql = "CREATE TABLE `events` (`s.no.` INT(11) NOT NULL AUTO_INCREMENT , `date_and_venue` TEXT NOT NULL , `event_name` TEXT NOT NULL , `type` TEXT NOT NULL , `content` TEXT NOT NULL , PRIMARY KEY (`s.no.`))";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "events table created successfully";
            }
           }
        else {
            die("connection with blogs database was unsuccessful : ".mysqli_connect_error());
        }
    ?>