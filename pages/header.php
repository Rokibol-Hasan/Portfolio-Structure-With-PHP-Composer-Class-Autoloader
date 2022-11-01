<?php
require_once "./vendor/autoload.php";
include "./functions.php";

use App\classes\HelloWorld;

$students = new HelloWorld();

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
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="logo">
                    <a class="navbar-brand" href="#">
                        <h1>APPLE</h1>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <?php
                        $menuData = $students->menu();
                        foreach ($menuData as $menus) {
                            if ($menus['0'] == 'Services') { ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item <?php echo activeClass('website'); ?>" href="?page=website">Website</a></li>
                                        <li><a class="dropdown-item <?php echo activeClass('application'); ?>" href="?page=application">Application </a></li>
                                        <li><a class="dropdown-item <?php echo activeClass('wordpress'); ?>" href="?page=wordpress">Wordpress</a></li>
                                    </ul>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo activeClass($menus['0']);?>" href="?page=<?php echo $menus['0']; ?>"> <?php echo $menus['0']; ?> </a>
                                </li>
                        <?php
                            }
                        } ?>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" name="submit" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>