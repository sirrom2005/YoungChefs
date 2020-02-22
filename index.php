<?php
include_once("bin/config.php");

$page = isset($_GET['action']) ? $_GET['action'] : 'index';
$pageTitle = ($page == 'index') ? 'Home :: ' : ucwords(strtolower(str_replace('-', ' ', $page))).' :: ';

include_once('bin/header.php');
if(file_exists($page.'.html')){
	include_once($page.'.html');
}else{
	include_once('404.html');
}
include_once('bin/footer.php');
?>