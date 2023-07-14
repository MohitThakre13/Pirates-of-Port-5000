<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Chakra+Petch:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="./header.css">
    
    <body>
    <nav class="header">
        <a href="./homepage.php">
            <div class="logo">
                <img src="./Images/openLakeLogo.png" alt="">
                <h3>Openlake.</h3>
            </div>
        </a>
        <div class="mid-nav">
            <ul class="navopt">
                <li class="on-page-home"><a href="./homepage.php" id="home">Home</a></li>
                <li class="on-page-project"><a href="./finalprojects.php" id="our-projects">Our Projects</a></li>
                <li class="on-page-community"><a href="./community.php" id="community">Community</a></li>
                <li class="on-page-advice"><a href="./advice.php" id="advice">Advice</a></li>
            </ul>
        </div>
        <div class="right-nav">
            <ul>
                <li><a href="./blogs.php" id="blog-btn">Blogs</a></li>
                <li><a href="./homepage.php#subscribe" id="subscribe-btn">Subscribe</a></li>
            </ul>
        </div>
    </nav>

    <nav class="header-mobile">

        <a href="./homepage.php">
            <div class="logo">
                <img src="./Images/openLakeLogo.png" alt="">
                <h3>Openlake.</h3>
            </div>
        </a>

        <input class="side-menu" type="checkbox" id="side-menu" />
        <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>

        <nav class="nav">
            <ul class="menu">
                <li><a href="./homepage.php">Home</a></li>
                <li><a href="./finalprojects.php">Our Projects</a> </li>
                <li><a href="./community.php">Community</a> </li>
                <li><a href="./advice.php">Advice</a></li>
                <li><a href="./blogs.php">Blogs</a></li>
                <li><a href="./homepage.php#subscribe">Subscribe</a></li>
            </ul>
        </nav>
    </nav>
</body>

</html>