<?php
  $big = 2;
  $small = 2;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Control structure</title>
    <meta charset="utf-8">
</head>
<body>
  <?php if($big>$small): ?>
      Bigger
  <?php elseif($big == $small): ?>
      Equal
  <?php else: ?>
      Smaller
  <?php endif; ?>
</body>
