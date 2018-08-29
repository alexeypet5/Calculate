<?php
require_once "CalculateSum.php";
 if(isset($_POST['send']))
  {
    $a = $_POST['field_1'];
    $b = $_POST['field_2'];
  }
 
$calculator = new Calculator($a,$b);
echo $a;
echo '+';
echo $b;
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Table of multiplication</title>
</head>
<body>
    <form action="#" method="post">
    <input type="text" name="field_1">
    <input type="text" name="field_2">
    <input type='submit' name="send" value="Count">
  </form>
  <? if(isset($_POST['send'])): ?>
  <div><? echo 'Result: ' ?><? echo $calculator->calculate($a,$b); ?></div>
  <? endif; ?>
</body>
</html>