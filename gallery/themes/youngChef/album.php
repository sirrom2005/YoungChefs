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
			<h1 class="page-header"><?php printAlbumTitle(); ?></h1>
            <span style="float:right;">
            	<?php printPageListWithNav("« " . gettext("prev"), gettext("next") . " »"); ?>
            </span>
			<ol class="breadcrumb">
				<li><?php printHomeLink('', ' '); printGalleryIndexURL(' ', getGalleryTitle()); printParentBreadcrumb(); ?>
				</li>
				<li class="active"><?php printAlbumTitle(); ?></li>
			</ol>
		</div>
	</div>
	<!-- /.row -->
	
	<div class="row album">
		<?php while (next_image()): ?>
		<div class="col-md-2 text-center">
			<div class="thumbnail">
				<a href="<?php echo html_encode(getImageURL()); ?>" title="<?php printBareImageTitle(); ?>">
					<?php printImageThumb(getAnnotatedImageTitle(),"img-responsive "); ?>
				</a>
			</div>
		</div>
		<?php endwhile; ?>
	</div>

	<div class="row">
		<?php
            //printPageListWithNav("« " . gettext("prev"), gettext("next") . " »");
            //if (function_exists('printAddToFavorites')) printAddToFavorites($_zp_current_album);
            //printTags('links', gettext('<strong>Tags:</strong>') . ' ', 'taglist', '');
            //@call_user_func('printGoogleMap');
            //@call_user_func('printSlideShowLink');
            //@call_user_func('printRating');
            //@call_user_func('printCommentForm');
        ?>
	</div>
</div> 
<?php include_once('includes/footer.php'); ?>