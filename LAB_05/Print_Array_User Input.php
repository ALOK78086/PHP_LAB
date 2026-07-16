<!DOCTYPE html>
<html>
<head>
    <title>Print Array</title>
</head>
<body>

<h2>Print Array Values</h2>

<form method="post">
    Enter Array Values (space se alag kare):<br><br>
    <input type="text" name="data" placeholder="10 20 30 40" required>
    <br><br>
    <input type="submit" value="Print">
</form>

<?php
if(isset($_POST['data']))
{
    $arr = explode(" ", $_POST['data']);

    echo "<h3>Array Values:</h3>";

    foreach($arr as $value)
    {
        echo $value . "<br>";
    }
}
?>

</body>
</html>