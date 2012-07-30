<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Lekton' rel='stylesheet' type='text/css'>

</head>
<body>

<?php

require_once("models/viewModel.php");

$views = new viewModel();

$views->getView("views/header.html");
$views->getView("views/home.html");
$views->getView("views/footer.html");

?>

</body>
</html>