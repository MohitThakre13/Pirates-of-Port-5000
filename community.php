<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="community.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>Community</title>
</head>

<body>


    <?php
    require_once('header.php');
    ?>
    
    <br><br><br>

    <div class="mentorbackground">
      THE TEAM
    </div>
   
    <br><br><br>
        
    <div class="center">
        <b>THE OPENLAKE COMMUNITY</b>
    </div>

    <?php
        
        //making connection with the database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "community";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn) {
            // reading entries from blogs database
            $sql = "SELECT * FROM `community`";
            $result = mysqli_query($conn, $sql);

            //counting total blogs
            $num = mysqli_num_rows($result);
            if ($result) {
                if ($num > 0) {

                    while($row = mysqli_fetch_assoc($result)) {
                        if ($row['position'] == "Coordinator") {
                        echo '
                        <div class="container">
                        <div class="one-advice">
                            <div class="image-container">
                                <img src="images/m1.jpg" alt="A beautiful image"  class="rounded-image">
                            </div>
                
                            <div class="advice-container">
                                <p class="author">'.$row['name'].'</p>
                                <p class="author">'.$row['position'].'</p>
                                <div class="icons-container">
                                    <a href="'.$row['insta'].'" class="footer__link icon footer__link--instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="'.$row['linkedin'].'" class="footer__link icon footer__link--linkedin"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            
                        </div> 
                        ';
                    }
                }

                //again starting from start
                $result = mysqli_query($conn, $sql);

                if ($result) {

                    while($row = mysqli_fetch_assoc($result)) {
                        
                        if ($row['position'] != "Coordinator") {
                        echo '
                        <div class="container">
                        <div class="one-advice">
                            <div class="image-container">
                                <img src="images/m1.jpg" alt="A beautiful image"  class="rounded-image">
                            </div>
                
                            <div class="advice-container">
                                <p class="author">'.$row['name'].'</p>
                                <p class="author">'.$row['position'].'</p>
                                <div class="icons-container">
                                    <a href="'.$row['insta'].'" class="footer__link icon footer__link--instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="'.$row['linkedin'].'" class="footer__link icon footer__link--linkedin"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            
                        </div> 
                        ';
                    }
                    }
                }
                }
            }
        }
        else {
            die("connection with blogs database was unsuccessful : ".mysqli_connect_error());
        }
    ?>


    
    <!-- <div class="container">
        <div class="one-advice">
            <div class="image-container">
                <img src="images/m1.jpg" alt="A beautiful image"  class="rounded-image">
            </div>

            <div class="advice-container">
                <p class="content">We also don't always experience pure forms of each emotion. Mixed emotions over different events orsituations in our lives are common. When faced with starting a newjob, you might feel both excited and nervous. Getting married or having a child might be marked by a wide variety of emotions ranging from joy to anxiety. These emotions might occur simultaneously, or you might feel them one after another.</p>
                <p class="author">Anshu Ghosh, Btech 2024</p>
                <div class="icons-container">
                    <a href="https://www.instagram.com/iitbhilai/" class="footer__link icon footer__link--instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/school/iit-bhilai/" class="footer__link icon footer__link--linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            
        </div>












        <div class="one-advice">
            <div class="image-container">
                <img src="images/m1.jpg" alt="A beautiful image"  class="rounded-image">
            </div>













            <div class="advice-container">
                <p class="content">We also don't always experience pure forms of each emotion. Mixed emotions over different events orsituations in our lives are common. When faced with starting a newjob, you might feel both excited and nervous. Getting married or having a child might be marked by a wide variety of emotions ranging from joy to anxiety. These emotions might occur simultaneously, or you might feel them one after another.</p>
                <p class="author">Anshu Ghosh, Btech 2024</p>
                <div class="icons-container">
                    <a href="https://www.instagram.com/iitbhilai/" class="footer__link icon footer__link--instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/school/iit-bhilai/" class="footer__link icon footer__link--linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            
        </div>
        <div class="one-advice">
            <div class="image-container">
                <img src="images/m1.jpg" alt="A beautiful image"  class="rounded-image">
            </div>

            <div class="advice-container">
                <p class="content">We also don't always experience pure forms of each emotion. Mixed emotions over different events orsituations in our lives are common. When faced with starting a newjob, you might feel both excited and nervous. Getting married or having a child might be marked by a wide variety of emotions ranging from joy to anxiety. These emotions might occur simultaneously, or you might feel them one after another.</p>
                <p class="author">Anshu Ghosh, Btech 2024</p>
                <div class="icons-container">
                    <a href="https://www.instagram.com/iitbhilai/" class="footer__link icon footer__link--instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/school/iit-bhilai/" class="footer__link icon footer__link--linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            
        </div>
        <div class="one-advice">
            <div class="image-container">
                <img src="images/m1.jpg" alt="A beautiful image"  class="rounded-image">
            </div>

            <div class="advice-container">
                <p class="content">We also don't always experience pure forms of each emotion. Mixed emotions over different events orsituations in our lives are common. When faced with starting a newjob, you might feel both excited and nervous. Getting married or having a child might be marked by a wide variety of emotions ranging from joy to anxiety. These emotions might occur simultaneously, or you might feel them one after another.</p>
                <p class="author">Anshu Ghosh, Btech 2024</p>
                <div class="icons-container">
                    <a href="https://www.instagram.com/iitbhilai/" class="footer__link icon footer__link--instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/school/iit-bhilai/" class="footer__link icon footer__link--linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            
        </div> -->
    </div>
    <div class="blank"></div>
    <?php
    require_once('footer.php');
    ?>


</body>

</html>