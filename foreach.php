<?php

$user1 = [
  "name" => "John",
  "email" => "johnappleseed@mac.com",
  "age" => 22
];
$user2 = [
  "name" => "Senna",
  "email" => "Sennaappleseed@mac.com",
  "age" => 21
];

$user_database = [$user1, $user2];

foreach ($user1 as $user) {
      echo $user . "\n";
}

foreach ($user1 as $index => $value) {
      echo $index . "=>" . " " . $value . "\n";
}
