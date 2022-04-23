<?php

$fruit = ['apple', 'banana', 'orange', 'mango'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fruit</title>
    </head>
    <body>

    <h1>Fruit</h1>
      <ol>
        <?php for($i = 0; $i<4; $i++): ?>
        <li>
          <?= $fruit[$i] ?>
        </li>
      <?php endfor; ?>
      </ol>
    </body>
</html>
