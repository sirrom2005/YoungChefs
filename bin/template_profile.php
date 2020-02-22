    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo cleanString($rs['name']);?> - <small><?php echo cleanString($rs['title']);?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?action=about">About</a></li>
                    <li class="active"><?php echo cleanString($rs['name']);?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-5 text-center">
                <img class="img-responsive fa-border" src="images/profiles/<?php echo $rs['photo'];?>" alt="">
                <div class="caption">
                	<h3><?php echo cleanString($rs['name']);?><br><small><?php echo cleanString($rs['title']);?></small></h3>   
                    <ul class="list-inline">
                        <li><a href="https://www.facebook.com/YoungChefsJA/" target="_blank"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <!--li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a></li-->
                        <li><a href="https://twitter.com/youngchefsja" target="_blank"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-7">
                <h3>Profile</h3>
                <?php echo $rs['bio'];?>
            </div>

        </div>
        <!-- /.row -->

        <p>&nbsp;</p>

        <hr>