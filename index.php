<?php
echo "hello";
include_once("controller/controller.php");
$controller= new Controller();
$controller->render("views/mainpageview.php");?>
