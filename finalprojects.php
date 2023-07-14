<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repo List</title>
    <link rel="stylesheet" href="fp.css">
</head>
<body>

    <?php
      require_once('header.php');
    ?>

<?php
echo '<section class="our_projects">';
$url = "https://api.github.com/orgs/OpenLake/repos";
$apiKey = "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";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: token {$apiKey}",
    "User-Agent: My-App",
]);


$response = curl_exec($ch); /*boolean flag*/ 
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Get the HTTP status code

if ($httpCode === 200) 
{
    $repositories = json_decode($response, true);
    
    if ($repositories)
    {
        echo '<br><br><br>';
        echo '<div class="titleproject">Our Projects</div>';
        echo '<br><br><br>';
        echo '<div class="all-projects">';


        foreach ($repositories as $repository) 
        {   echo '<a href="indiv_proj.php?repo=' . $repository['name'] . '">';
            echo '<div class="project-container">';
            echo '<br><br><br>';
            echo '<div id="project-head">';
            echo $repository['name'];
            echo '</div>';
            echo '<br>';
            echo '<div class="repo-desc">' . $repository['description'] . '</div>';
            echo '</div>';
            echo '</a>';
            echo '<br><br><br>';
            
        }
    } 
    
    else 
    {
        echo "No repositories found.";
    }
} 

else 
{
    echo "Failed to fetch repositories. Error: " . $httpCode;
}

curl_close($ch);
?>
</div>
</div>


    <?php
        require_once('footer.php');
    ?>
    
</body>
</html> 