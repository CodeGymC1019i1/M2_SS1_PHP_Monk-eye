<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inventmentAmount = $_POST["inventmentAmount"];
    $yearlInterestRate = $_POST["yearlInterestRate"];
    $numberOfYear = $_POST["numberOfYear"];
    for ($i = 1; $i <= $numberOfYear; $i++) {
        $inventmentAmount = $inventmentAmount + ($inventmentAmount * $yearlInterestRate) / 100;
    }
    echo "Future value: " . $inventmentAmount;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
    <style>
        input[type=number] {
            width: 300px;
            font-size: 16px;
            border: 1px solid black;
            padding: 10px 10px 10px 10px;
            margin: 10px 0px;
        }

        #submit {
            padding: 10px 10px 10px 10px;
            margin: 10px 0px
        }
    </style>
</head>
<body>
<form method="post">
    <input type="number" name="inventmentAmount" placeholder="inventment Amount"/> <br>
    <input type="number" name="yearlyInterestRate" placeholder="Yearly Interest Rate"/> <br>
    <input type="number" name="numberOfYears" placeholder="Number of Years"/> <br>
    <button type="submit" id="submit">calculate</button>
</form>
</body>
</html>