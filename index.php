<?php

if ($_GET['route']=='') {
    if (file_exists("templates/index.php")) {
        require("templates/index.php");
    } else {
        include("errorpage/notfound.php");
    }
} else {
    if (file_exists("templates/" . $_GET['route'] . ".php")) {
        require("templates/" . $_GET['route'] . ".php");
    } else {
        include("errorpage/notfound.php");
    }
}

?>
