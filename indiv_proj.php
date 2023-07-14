<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repository Details</title>
    <link rel="stylesheet" href="indiv_proj.css">
</head>
<body>

    <?php
    require_once('header.php');
    ?>


<div class="wrapper">
<div class="compcontainer">

<?php
if (isset($_GET['repo'])) {
    $repoName = $_GET['repo'];
    $repoUrl = "https://api.github.com/repos/OpenLake/$repoName";
    $contributorsUrl = "https://api.github.com/repos/OpenLake/$repoName/contributors";
    $apiKey = "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";

    // Fetch repository details
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $repoUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: token {$apiKey}",
        "User-Agent: My-App",
    ]);
    $repoResponse = curl_exec($ch);
    $repoHttpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Fetch contributors
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $contributorsUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: token {$apiKey}",
        "User-Agent: My-App",
    ]);
    $contributorsResponse = curl_exec($ch);
    $contributorsHttpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($repoHttpCode === 200 && $contributorsHttpCode === 200) {
        $repoDetails = json_decode($repoResponse, true);
        $contributors = json_decode($contributorsResponse, true);

        // Display repository details
        echo '<h1 class="repo-name">' . $repoDetails['name'] . '</h1>';
        echo '<br>';
        echo '<p class="repo-description">' . $repoDetails['description'] . '</p>';
        echo '<p class="repo-description">URL: <a href="' . $repoDetails['html_url'] . '">' . $repoDetails['html_url'] . '</a></p>';
        echo '<br>';
        // Display contributors
        echo '<h2 class="contributors-title">Contributors:</h2>';
        if (!empty($contributors)) {
            echo '<ul class="contributors-list">';
            foreach ($contributors as $contributor) {
                echo '<li class="contributor">';
                echo 'Name: <span class="contributor-name">' . $contributor['login'] . '</span><br>';
                echo 'URL: <a class="contributor-url" href="' . $contributor['html_url'] . '">' . $contributor['html_url'] . '</a>';
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p class="no-contributors">No contributors found.</p>';
        }
    } else {
        echo '<p class="error-message">Failed to fetch repository details. Error: ' . $repoHttpCode . '</p>';
    }
} else {
    echo '<p class="error-message">No repository specified.</p>';
}
?>
</div>
</div>
<br><br><br>

    <?php
    require_once('footer.php');
    ?>



</body>
</html>
