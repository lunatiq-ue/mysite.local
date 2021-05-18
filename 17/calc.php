<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$num1 = abs((int) $_POST['num1']);
$num2 = abs((int) $_POST['num2']);
$operator = trim(strip_tags($_POST['operator']));
}
switch($operator){
  case "+":
    $res=$num1+$num2;
    break;
  case "-":
    $res=$num1-$num2;
    break;
  case "*":
    $res=$num1*$num2;
    break;
  case "/":
    $res=($num2!=0)? $num1/$num2:"Ошибка! На ноль делить нельзя!";
    break;
  default:
    $res="Ошибка! Доступны только 4 действия: сложение, вычитание, умножение и деление.";
}

?>
    <h3>Результат: <?=$res ?></h3>
    <form action='<?= $_SERVER['REQUEST_URI']?>' method="POST">
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>