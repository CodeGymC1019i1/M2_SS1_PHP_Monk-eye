<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<h1>Simple Calculator</h1>
<form method="post">
    <fieldset>
        <legend>calculator</legend>
        <label>First Operand: </label><input type="number" name="number1"><br/>
        <label>Operator : </label><select name="operator">
            <option value="addition">Addition</option>
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multipication">Multiplication</option>
            <option value="division">Division</option>
        </select><br/>
        <label>Second Operand: </label><input type="number" name="number2">
        <button type="submit" id="submit">calculate</button>
    </fieldset>
</form>
<br/>
<br/>
<h1>RESULT: </h1>
</body>
</html>
<?php
class DivideByZeroException extends Exception {};
if($_SERVER["REQUEST_METHOD"]=="POST"){
    try {
        $num1 = $_POST["number1"];
        $num2 = $_POST["number2"];
        $operator = $_POST["operator"];
        if ($num2 ==0){
            throw new DivideByZeroException();
        }
        switch ($operator){
            case "addition":
                $num3 = $num1+$num2;
                echo $num1." + " .$num2." = ".$num3;
                break;
            case "subtraction":
                $num3 = $num1-$num2;
                echo $num1 ." - " .$num2." = " .$num3;
                break;
            case "multipication":
                $num3 = $num1*$num2;
                echo $num1 ." * " .$num2." = " .$num3;
                break;
            case "division":
                $num3 = $num1/$num2;
                echo $num1 ."/" .$num2." = " .$num3;
                break;
        }
    }
    catch (DivideByZeroException $ex){
        echo "DIVIDE BY ZERO EXCEPTION!";
    }
}
?>
