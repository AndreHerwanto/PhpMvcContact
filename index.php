<?php
// index.php - Front controller

session_start();
require 'controllers/ContactController.php';

$controller = new ContactController();
$controller->handleRequest();
?>
