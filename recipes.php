<?php
include_once("bin/config.php");
include_once("bin/site.class.php");

$page = "recipes";

$obj = new site();

$id = (isset($_GET['id']))? preg_replace("/[^0-9]+/", "0", $_GET['id']) : 0;


$pageTitle = 'Recipes :: ';

if($id){
	$rs = $obj->getRecipeById($id);
}else{
	$rs = $obj->getRecipes();
}

include_once('bin/header.php');

if($id){
	include_once('bin/template_recipe.php');
}else{
	include_once('bin/template_recipes.php');
}

include_once('bin/footer.php');
?>