<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include "./vue/vueWaitEgg.php";

header('Refresh:2;URL=./?action=Egg');

?>