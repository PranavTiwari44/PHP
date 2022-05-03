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

$sql = "Select * from article where id = " . $_GET['id'];

$results = mysqli_query($conn, $sql);

if ($results === false) {
  echo mysqli_error($conn);
}
else{
  $articles = mysqli_fetch_assoc($results);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
</head>
<body>

    <header>
        <h1>My blog</h1>
    </header>

    <main>
        <ul>
            <?php if ($articles == null): ?>
              <p>No article found</p>
            <?php else: ?>
                <li>
                    <article>
                        <h2><?= $articles['title']; ?></h2>
                        <p><?= $articles['content']; ?></p>
                    </article>
                </li>
            <?php endif; ?>
        </ul>
    </main>
</body>
</html>
