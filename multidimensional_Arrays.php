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

var_dump($user_database[0]["email"]);
