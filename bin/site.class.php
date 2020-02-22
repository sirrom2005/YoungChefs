<?php 
include_once("mySQlDB__.class.php");
class site extends mySqlDB
{	
	function site(){ parent::mySqlDB(); }

	function getProfile($id)
	{				
		$sql = 'SELECT * FROM profile where url_name = "'.$id.'"';
		return parent::executeQuery($sql, false);
	}
	
	function getYoungChefList()
	{				
		$sql = 'SELECT p.url_name, p.title, p.name, p.photo FROM profile p WHERE p.type = 2 ORDER BY p.name;';
		return parent::executeQuery($sql, true);
	}
	
	function getRecipes()
	{				
		$sql = 'SELECT r.id, r.name, IF(IFNULL(TRIM(r.photo),\'\')>\'\',r.photo,\'default_recipies.jpg\') as photo, CONCAT(p.name) as chef, p.url_name  FROM recipes r
				INNER JOIN profile p ON p.id = r.chef_id';
		return parent::executeQuery($sql, true);
	}
	
	function getRecipeById($id)
	{				
		$sql = 'SELECT r.id, r.name, r.ingredients, r.preparation, r.chef_id, IF(IFNULL(TRIM(r.photo),\'\')>\'\',r.photo,\'default_recipies.jpg\') as photo, CONCAT(p.title, \' \', p.name) as chef, p.url_name FROM recipes r
				INNER JOIN profile p ON p.id = r.chef_id 
				WHERE r.id = '.$id;
		return parent::executeQuery($sql, false);
	}
}
?>