<?php

//making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username, $password);

        if ($conn) {
           //creating a database
           $sql = "CREATE DATABASE community";
           $result = mysqli_query($conn, $sql);

           if ($result){
            echo "community database created successfully<br>";
           }
        }
        else {
            die("connection with community database was unsuccessful : ".mysqli_connect_error());
        }

        //making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "community";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn) {
            $sql = "CREATE TABLE `community` (`s.no.` INT(11) NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `position` TEXT NOT NULL, `linkedin` TEXT NOT NULL, `insta` TEXT NOT NULL , PRIMARY KEY (`s.no.`))";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "community table created successfully";
            }
           }
        else {
            die("connection with community database was unsuccessful : ".mysqli_connect_error());
        }
    ?>