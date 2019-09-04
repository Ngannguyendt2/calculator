<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Simple Calculator</h1>
<form action="index.php" method="post">
    <label>First operand:</label>
    <input type="text" name="number1"><br>
    <label>Operator</label>
    <select name="operator">
        <option>add</option>
        <option>sub</option>
        <option>mul</option>
        <option>div</option>
    </select>
    <br>
    <label>Second operand: </label>
    <input type="text" name="number2"><br>
    <input type="submit" value="Calculator">
</form>
<?php
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operator = $_POST['operator'];
$result = 0;
function calculator($num1, $num2, $ope)
{
    global $result;
    switch ($ope) {
        case "add":
            $result = $num1 + $num2;
            echo $result;
            break;
        case "sub":
            $result = $num1 - $num2;
            echo $result;
            break;
        case "mul":
            $result = $num1 * $num2;
            echo $result;
            break;
        case "div":
            try {
                if ($num2 == 0) {
                    throw new Exception("error");
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            $result = $num1 / $num2;
            echo $result;
            break;
    }
}

calculator($number1, $number2, $operator);
?>
</body>
</html>
