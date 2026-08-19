<!-- 2.6 Write a PHP code for user defined function for calculator -->

<?php

function calculator($a,$b,$op)
{
    switch($op)
    {
        case '+':
            return $a+$b;

        case '-':
            return $a-$b;

        case '*':
            return $a*$b;

        case '/':
            return $a/$b;
    }
}

if(isset($_POST['submit']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];

    $result = calculator($num1,$num2,$op);
}

?>

<form method="post">
    Number 1 :
    <input type="number" name="num1" required><br><br>

    Number 2 :
    <input type="number" name="num2" required><br><br>

    Operator :
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($result))
{
    echo "<h3>Result = ".$result."</h3>";
}
?>
