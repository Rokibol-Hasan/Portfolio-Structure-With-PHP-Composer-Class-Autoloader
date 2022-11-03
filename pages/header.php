<?php
require_once "./vendor/autoload.php";
include "./functions.php";

use App\classes\HeaderClass;
use App\classes\AddAboutHero;

$header = new HeaderClass();
$hero = new AddAboutHero();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STUDENT DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/main.js"></script>
</head>

<body>