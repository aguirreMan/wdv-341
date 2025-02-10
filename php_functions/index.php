<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #002B5C;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .output {
            background: #eee;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHP Functions</h2>
        <div class="output">
            <?php
            function formatTime($timeStamp){
                return date('m/d/Y', $timeStamp);
            }

            function formatInternationalTime($timeStamp){
                return date('d/m/Y', $timeStamp); 
            }

            function workingWithStrings($input){
                $trimmedString = trim($input);
                $length = strlen($trimmedString);
                $lowerCase = strtolower($trimmedString);
                $containsDMACC = (stripos($trimmedString, "DMACC") !== false) ? 'Yes' : 'No';
                echo "<strong>Number of characters in string:</strong> $length <br>";
                echo "<strong>Trimmed string:</strong> $trimmedString <br>";
                echo "<strong>All lowercase:</strong> $lowerCase <br>";
                echo "<strong>Contains 'DMACC'?:</strong> $containsDMACC <br>";
            }
                //https://stackoverflow.com/questions/4708248/formatting-phone-numbers-in-php
            function formatNumbers($number){
                $number = preg_replace('/[^0-9]/','',$number);
                return (strlen($number) == 10) ? '(' . substr($number, 0, 3) . ') ' . substr($number, 3, 3) . '-' . substr($number, 6) : 'Invalid phone number';
            }

            function formatCurrency($dollar){
                return '$' . number_format($dollar, 2);
            }
            
            echo "<strong>Formatted Currency:</strong> " . formatCurrency(123456) . "<br>";
            echo "<strong>Formatted Phone Number:</strong> " . formatNumbers('1234567890') . "<br>";
            
            workingWithStrings('Manuel Aguirre DMACC 2025');
            
            echo "<strong>U.S. Format:</strong> " . formatTime(time()) . "<br>";
            echo "<strong>International Format:</strong> " . formatInternationalTime(time());
            ?>
        </div>
    </div>
</body>
</html>
