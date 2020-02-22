    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Recipes
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="recipes.php">Recipes</a></li>
                    <li class="active"><?php echo cleanString($rs['name']); ?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive fa-border" src="images/recipies/<?php echo $rs['photo']; ?>" alt="recipes from young chefs jamaica">
            </div>
            <div class="col-md-6">
                <h2 style="margin:0;"><?php echo cleanString($rs['name']); ?></h2>
                <hr>
                <p><?php echo $rs['ingredients']; ?></p>
            </div>
        </div>
        <!-- /.row -->
		
        <!-- Recipes -->
        <div class="row">
            <div class="col-lg-12">
            <hr>
                <div class="well text-center"><h4 style="margin:0;">Preparation</h4></div>
                <div class="preparation"><?php echo $rs['preparation']; ?></div>
            </div>
        </div>
        <!-- /.row -->

        <hr>
<style>
.preparation li{ margin:10px 0;}
</style>
        
