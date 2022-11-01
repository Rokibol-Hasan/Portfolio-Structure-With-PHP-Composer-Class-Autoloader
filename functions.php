<?php 

function activeClass($uri){
    if ($_GET['page'] == $uri) {
        return "active";
    }
}


?>