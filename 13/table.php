<?php 
  $cols=5;
  $rows=10;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div id="header">
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
  </div>

  <div id="content">
    <h1>Таблица умножения</h1>
    <form action=''>
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <?php
    echo "<table border = '1' width='500' style= 'text-align:center'>";
    for ($tr = 1; $tr <= $rows; $tr++) { 
	    echo "<tr>"; 
	        for ($td = 1; $td <= $cols; $td++) { 
	            if ($tr == 1 || $td == 1) {
	               echo "<th style = 'background : red; color: white'>" . $tr * $td . "</th>"; 
	            } else
	            echo "<td>" . $tr * $td . "</td>";
	        	}
	        }
      echo "</tr>";
      echo "</table>";
    ?>
  </div>
  
  <div id="nav">
    <h2>Навигация по сайту</h2>
    <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul>
  </div>

  <div id="footer">
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2021
  </div>
</body>
</html>