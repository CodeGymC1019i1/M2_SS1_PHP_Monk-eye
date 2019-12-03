
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>display discount</title>
</head>
<body>
<?php
    for( $i =0; $i < 3; $i++){
        for($j=0 ;$j <7;$j++)
            echo "* ";
        echo "<br/>";
    }
?>
<br/>
<?php
for( $i =0; $i <= 5; $i++){
    for($j=0 ;$j <=$i;$j++)
        echo "* ";
    echo "<br/>";
}
?>
<br/>
<?php
for( $i = 6; $i > 0; $i--){
    for($j=0 ;$j <$i;$j++)
        echo "* ";
    echo "<br/>";
}
?>
<br/>
<?php
for( $i = 0; $i <5; $i++){
    for($j =5; $j>$i;$j--){
        echo "&nbsp&nbsp";
    }
    for($j=0 ;$j <2*$i+1;$j++)
        echo "*";
    echo "<br/>";
}
?>

</body>
</html>

