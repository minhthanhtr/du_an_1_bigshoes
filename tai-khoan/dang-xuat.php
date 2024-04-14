<?php
        session_start();
        session_destroy();
        header('location: /bigshoes/index.php');
    ?>