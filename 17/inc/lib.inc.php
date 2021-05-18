<?php
function drawMenu($menu, $vertical=true){
    if(!$vertical){
      $style=" style='display:inline'";
    }
    
    foreach ($menu as $item) {
        echo "<ul style:'{$style}'>";
          echo "<li style:'{$style}'>";
            echo "<a href='{$item['href']}'> {$item['link']} </a>"; 
          echo "</li>";
        echo "</ul>";  
      }
  };
  function drawTable ($cols, $rows, $color){
    echo "<table border = '1' width='500' style= 'text-align:center'>";
    for ($tr = 1; $tr <= $rows; $tr++) { 
	    echo "<tr>"; 
	        for ($td = 1; $td <= $cols; $td++) { 
	            if ($tr == 1 || $td == 1) {
	               echo "<th style = 'background : {$color}; color: white'>" . $tr * $td . "</th>"; 
	            } else
	            echo "<td>" . $tr * $td . "</td>";
	        	}
	        }
      echo "</tr>";
      echo "</table>";
  }