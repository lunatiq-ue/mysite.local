<?php
  include "inc/lib.inc.php";
  include "inc/data.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div id="header">
    <?php include "inc/top.inc.php" ?>
  </div>

  <div id="content">
    <?= $welcome ?>, Гость!
    <?php include "inc/index.inc.php" ?>
  </div>

  <div id="nav">
    <?php include "inc/menu.inc.php" ?>
  </div>
  
  <div id="footer">
    <?php include "inc/bottom.inc.php" ?>
  </div>
</body>
</html>