<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include "./vue/vueEgg.php";

header('Refresh:33;URL=./?action=AfficheListePhotosEgg');

?>