<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

echo "Vous vous appellez : ".$name." Et voici votre e-mail : ".$email;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Document</title>
</head>
<body>
<div class="buttons">
    <a class="button is-info" href="index.php">retournez à l'accueil</a>

</div>
</body>
</html>