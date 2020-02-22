<?php
include_once("bin/config.php");
include_once("bin/site.class.php");

$obj = new site();

$id = (isset($_GET['id']))? preg_replace("/[^a-z-]+/", "0", strtolower($_GET['id'])) : 0;
$rs = $obj->getProfile($id);

$pageTitle = ($rs)? $rs['name'].' :: ' : "404".' :: ';

include_once('bin/header.php');
if($rs){
	include_once('bin/template_profile.php');
}else{
	include_once('404.html');
}
include_once('bin/footer.php');
?>