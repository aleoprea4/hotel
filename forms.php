<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="" method="post">
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
</form> -->
    <form class="" action="" method="post">
        <input type="number" name="n1" placeholder="Add the 1st number" id="">
        <input type="number" name="n2" placeholder="Add the 2nd number" id="">
        <input type="submit" name="divide" id="">
    </form>
    <?php

    $fruits = array('mango', 'orange', 'grape');

    $numberOfFruits = count($fruits);

for ($i=0; $i <   $numberOfFruits; $i++) {
        echo $fruits[$i];
}




    // if (isset($_POST['divide'])) {
    //     $num1 = $_POST['n1'];
    //     $num2 = $_POST['n2'];

    //     function divide($divd, $divz)
    //     {
    //         if ($divz == 0) {
    //             throw new Exception("Error Processing Request", 1);

    //         }
    //         return $divd / $divz;
    //     }
    //     try {
    //         echo divide($num1, $num2);
    //     } catch (Exception $th) {
    //         echo "Can't div by 0";
    //     } finally{
    //         echo "Process completed";
    //     }

    // }

    // function familyName($fName, $year){
//     echo "hi" . $fName . "birth date" . $year;
// }
// familyName('john', '2022');
// familyName('myName', '1999');
// familyName('Dav', '1999');
    












    // for($i=0; $i<=20; $i++){
//     if ($i > 30) {
//         echo ($i . '/');
//     }
//     else {
//         echo ($i . '/');
    
    //     }
// }
// ;
    
    // $x = 1;
// while($x <10){
//     echo "number is" . $x;
//     $x++;
// }
// $theday = date("D"); //D for day H for hour  l for ...
// echo $theday;
    
    // switch ($theday) {
//     case 'Monday':
//         echo "hi";
//         break;
//     case 'Tuesday';
//     echo 'oke';
//     break;
//     default:
//         echo 'hmm';
//         break;
// }
    

    // if (isset($_POST['calculate'])) {
//     $number1 = $_POST['num1'];
//     $number2 = $_POST['num2'];
//     $op = $_POST['operator'];
    
    // }
    // if($op == 'plus'){
    //     $addi = $number1 + $number2;
    //     echo "The result is " . $addi;
    // }
    // elseif($op == '-'){
    //     $subs = $number1 - $number2;
    //     echo "The result is " . $subs;
    // }
    // elseif($op == '/'){
    //     $div= $number1 / $number2;
    //     echo "The result is " . $div;
    // }
    // elseif($op == '*'){
    //     $multiply = $number1 * $number2;
    //     echo "The result is " . $multiply;
    // }
    // else {
    //     echo "Please choose an operator!";
    // }
// }
    ?>
</body>

</html>