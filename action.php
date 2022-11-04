<?php
include "pages/header.php";
if (isset($_GET['page'])) {
    if ($_GET['page'] !== 'Login') {
        include "pages/blocks/navbar.php";
        if ($_GET['page'] == 'Home') {
            include "pages/home.php";
        } elseif ($_GET['page'] == 'About') {
            $getData = $hero->selectAboutHero();
            $result = $getData->fetch_assoc();
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
        } elseif ($_GET['page'] == 'add-about-hero') {
            if (isset($_POST['submit'])) {
                $insertHero = $hero->insertAboutHero($_POST, $_FILES);
                if ($insertHero) {
                    echo "<span class='alert alert-primary'>Info Updated!</span>";
                } else {
                    echo "<span class='alert alert-danger'>Something Wrong</span>";
                }
            }
            include "pages/admin/add-about-hero.php";
        } elseif ($_GET['page'] == 'manage-about-hero') {
            $getData = $hero->selectAboutHero();
            include "pages/admin/manage-about-hero.php";
        }
        include "pages/blocks/footer-bar.php";
    } elseif ($_GET['page'] == 'Login') {
        include "pages/login.php";
    }
}

if (isset($_GET['edit'])) {
    if (isset($_GET['edit'])) {
        $editId = $_GET['edit'];
        $getDataById = $hero->selectAboutHeroById($editId);
        $result = $getDataById->fetch_assoc();
        if (isset($_POST['submit'])) {
            $editAboutHero = $hero->updateAboutHero($editId, $_POST, $_FILES);
            if ($editAboutHero) {
                header("Location: action.php?page=manage-about-hero");
            }
        }
    }
    include "pages/admin/edit-about-hero.php";
}



include "pages/footer.php";
