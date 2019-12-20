<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
</body>
</html>
<?php
function checkPrime($number){
    if ($number ==2) return true;
    if ($number >2) {
    for ($i =2;$i<=sqrt($number);$i++){
        if ($number%$i==0) return false;
    }
    return true;
    }
}
for($j=2;$j<100;$j++){
    if(checkPrime($j)==true)
        echo $j."<br>";
}
?>