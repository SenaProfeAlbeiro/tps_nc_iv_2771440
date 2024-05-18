<?php
    require_once "models/DataBase.php";
    require_once "controllers/Dashboard.php";
    $controller = new Dashboard;
    $controller->main();
?>