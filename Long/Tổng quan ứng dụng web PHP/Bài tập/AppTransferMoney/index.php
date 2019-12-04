<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        fieldset {
            width: 290px;
        }
    </style>
</head>
<body>
<form method="post">
    <fieldset>
        <input type="number" name="usd">USD
        <button type="submit">Transfer</button>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usd = $_POST["usd"];
}
$rate = 23000;
echo "Giá trị sau chuyển đổi là".$usd*$rate;
?>