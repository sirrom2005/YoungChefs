<?php
// force UTF-8 Ø
if (!defined('WEBPATH')) die();
include_once('includes/header.php');
?>
<?php zp_apply_filter('theme_body_open'); ?>
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
			<?php
				printHomeLink('', ' | ');
				printGalleryTitle();
			?>
            </h1>
            <?php printGalleryDesc(); ?>
    	</div>
    </div>
    <!-- /.row -->

	<div class="row gallery">
		<?php while (next_album()): ?>
            <div class="col-md-3 text-center">
                <div class="thumbnail">
                    <div class="caption">
                        <h5><?php printAlbumTitle(); ?></h5>
                        <?php //printAlbumDesc(); ?>
                        <!--a href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php printAnnotatedAlbumTitle(); ?>" class="btn btn-primary">View Gallerys</a-->
                    </div> 
                    <a class="img-home" href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php printAnnotatedAlbumTitle(); ?>"><?php printAlbumThumbImage(getAnnotatedAlbumTitle(),"img-responsive"); ?></a>
                </div>
            </div>
        <?php endwhile; ?>
	</div>
    
    <div class="row">
    	<div class="col-lg-12">
    		<?php printPageListWithNav("« " . gettext("prev"), gettext("next") . " »"); ?>
        </div>
    </div>
</div>

<?php include_once('includes/footer.php'); ?>