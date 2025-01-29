<?php
// Define variables
$yourName = "Manuel";
$assignmentName = "PHP, HTML, and JavaScript Integration";
$number1 = 10;
$number2 = 20;
$total = $number1 + $number2;


$languages = ["PHP", "HTML", "Javascript"]?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $assignmentName ?></title>
</head>
<body>
    <h1><?php echo $assignmentName ?></h1>
    <h2>Created by <?php echo $yourName ?></h2>
    
    <h3>Number Operations:</h3>
    <p>Number 1: <?php echo $number1 ?></p>
    <p>Number 2: <?php echo $number2 ?></p>
    <p>Total: <?php echo $total ?></p>

    <h3>Programming Languages:</h3>
    <ul id="languages-List"></ul>
    
    <script>
        let languages = <?php echo json_encode($languages) ?>
        
        let list = document.getElementById('languages-List')
        languages.forEach(language => {
            let listItem = document.createElement('li')
            listItem.textContent = language
            list.appendChild(listItem)
        })
    </script>
</body>
</html>
