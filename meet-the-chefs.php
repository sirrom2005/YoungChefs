<?php
include_once("bin/config.php");
include_once("bin/site.class.php");

$page = "meet";

$obj = new site();

$rs = $obj->getYoungChefList();

$pageTitle = 'Meet The Chefs :: ';

include_once('bin/header.php');

include_once('bin/meet-the-chefs.php');

include_once('bin/footer.php');
?>