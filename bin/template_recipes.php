    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Recipes
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Recipes</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators >
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol-->
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="images/recipes_1.jpg" alt="recipes from young chefs jamaica">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/recipes_2.jpg" alt="recipes from young chefs jamaica">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/recipes_3.jpg" alt="recipes from young chefs jamaica">
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> 
                </div>
            </div>
            <div class="col-md-6">
                <h2>Recipes</h2>
                <p>Create delicious dishes, just like our Young Chefs cooking club members do from the recipes below.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Recipes -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Recipes from our chefs</h2>
            </div>
            
            <?php 
			if($rs){ 
				foreach($rs as $row => $value){
			?>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <a href="recipes.php?id=<?php echo $value['id']; ?>" >
                    	<img class="img-responsive fa-border" src="images/recipies/<?php echo $value['photo']; ?>" alt="young chefs jamaica">
                    </a>
                    <div class="caption">
                        <h3><?php echo cleanString($value['name']); ?><br>
                            <small style="font-size:12px;">Contributed by: <a href="<?php echo cleanString($value['url_name']); ?>.htm" ><?php echo cleanString($value['chef']); ?></a></small>
                        </h3>
                        <a href="recipes.php?id=<?php echo $value['id']; ?>" class="btn btn-primary">Ingredients</a>
                    </div>
                </div>
            </div>
            <?php 
				}
			} 
			?>
        </div>
        <!-- /.row -->

        <hr>

        
