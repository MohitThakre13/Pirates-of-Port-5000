<?php

//making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username, $password);

        if ($conn) {
           //creating a database
           $sql = "CREATE DATABASE emails";
           $result = mysqli_query($conn, $sql);

           if ($result){
            echo "emails database created successfully<br>";
           }
        }
        else {
            die("connection with emails database was unsuccessful : ".mysqli_connect_error());
        }

        //making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "emails";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn) {
            $sql = "CREATE TABLE `emails` (`s.no.` INT(11) NOT NULL AUTO_INCREMENT , `email` TEXT NOT NULL , PRIMARY KEY (`s.no.`), UNIQUE (`email`))";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "emails table created successfully";
            }
            else {
                echo "Email address already exists";
            }
           }
        else {
            die("connection with emails database was unsuccessful : ".mysqli_connect_error());
        }
    ?>