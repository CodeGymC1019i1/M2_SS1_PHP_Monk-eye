<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <input name="number">
    <button type="submit">Submit</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $number = $_POST["number"];
}
$count = 0;
function checkPrime($number){
    if ($number <2) return false;
    if ($number ==2) return true;
    if ($number >2) {
        for ($i =2;$i<=sqrt($number);$i++){
            if ($number%$i==0) return false;
        }
        return true;
    }
}
$j=0;
while($count<$number){
    if (checkPrime($j)==true){
        $count++;
        echo $j."<br>";
    }
    $j++;
}
?>