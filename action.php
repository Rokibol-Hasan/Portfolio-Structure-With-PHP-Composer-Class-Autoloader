<?php
include "pages/header.php";
if (isset($_GET['page'])) {
    if ($_GET['page'] !== 'Login') {
        include "pages/navbar.php";
        if ($_GET['page'] == 'Home') {
            include "pages/home.php";
        } elseif ($_GET['page'] == 'About') {
            include "pages/about.php";
        } elseif ($_GET['page'] == 'Contact') {
            include "pages/contact.php";
        } elseif ($_GET['page'] == 'Services') {
            include "pages/services.php";
        } elseif ($_GET['page'] == 'website') {
            include "pages/website-service.php";
        } elseif ($_GET['page'] == 'application') {
            include "pages/application-service.php";
        } elseif ($_GET['page'] == 'wordpress') {
            include "pages/wordpress-service.php";
        }
        include "pages/footer-bar.php";
    }elseif ($_GET['page']=='Login') {
        include "pages/login.php";
    }
}
include "pages/footer.php";
