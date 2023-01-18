<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="number" name="num1" placeholder="Add a number">
    <select name="operator" id="">
        <option disabled selected>Choose the operator</option>
        <option value="plus">Plus</option>
        <option value="-">Minus</option>
        <option value="/">Divide</option>
        <option value="*">Multiply</option>

    </select>
    <input type="number" name="num2" placeholder="Add another number">
    <button type="submit" name="calculate">Calculate</button>
</form>
<?php
if (isset($_POST['calculate'])) {
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $op = $_POST['operator'];
    if($op == 'plus'){
        $addi = $number1 + $number2;
        echo "The result is " . $addi;
    }
    elseif($op == '-'){
        $subs = $number1 - $number2;
        echo "The result is " . $subs;
    }
    elseif($op == '/'){
        $div= $number1 / $number2;
        echo "The result is " . $div;
    }
    elseif($op == '*'){
        $multiply = $number1 * $number2;
        echo "The result is " . $multiply;
    }
    else {
        echo "Please choose an operator!";
    }
}
?>
</body>
</html>