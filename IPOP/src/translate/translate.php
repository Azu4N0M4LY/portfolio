<?php

if(isset($_GET['translate'])) {
    if ($_GET['translate'] == 'es') {
        require_once "../templates/ES/index.html";
    }
    if ($_GET['translate'] == 'en') {
        require_once "../templates/EN/index.html";
    }
    if ($_GET['translate'] == 'cat') {
        require_once "../templates/CAT/index.html";
    }
}

?>