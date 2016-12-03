<!DOCTYPE html>
<head>
  <title>Tip Calculator</title>
  <h2>Tip Calculator</h2>
</head>

  <form action="tipCalculator.php" method="GET">
    Bill Subtotal:<input type="text" name="subtotal"/> <br>
    Tip Percentage:
    <?php
    for ($i = 10; $i <= 20; $i+=5){
      ?>
      <input type="radio" name="percent" value=<?php echo $i . "%"; ?>> <?php echo $i . "%"; ?>
      <?php
    }
    ?>
    <br><br><input type="submit" value="Submit"/><br><br>
  </form>
  <?php
    $subtotal = (float)$_GET["subtotal"];
    $percent = (float)$_GET["percent"];
    if (isset($_GET["subtotal"])){
      if (is_float($subtotal) && is_float($percent) && $subtotal > 0 ){
        $tip = $subtotal * $percent/100;
        $total = $tip + $subtotal;
        $tip1 = number_format($tip, 2);
        $total1 = number_format($total, 2);
        echo("Tip: $" . $tip1);
        echo "<br />\n";
        echo("Total: $" . $total1);
      } else {
        echo("Invalid input");
      }
    }
    else {
      echo("Tip: $" );
      echo "<br />\n";
      echo("Total: $");
    }
  ?>
  </html>
