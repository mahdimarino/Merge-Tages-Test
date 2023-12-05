<?php 
$title = isset($_GET['title']) ? $_GET['title'] : "";
$company = isset($_GET['company'])? $_GET['company']: "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1> Hi Mr. <?= $title?> from <?= $company?></h1>
    
</body>
</html>