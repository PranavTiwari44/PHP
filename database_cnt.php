<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_pran";
$db_pass = null;

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
  echo mysqli_connect_error();
  exit;
}
echo "connected successfully";

$sql = "Select * from article order by published_at;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
  echo mysqli_error($conn);
}
else{
  $articles = mysqli_fetch_all($results);
  var_dump($articles);
}