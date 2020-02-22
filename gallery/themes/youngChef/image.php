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
            	<ol class="breadcrumb">
                <?php
                if (hasPrevImage()) {
                    ?>
                    <li class="imgprevious"><a href="<?php echo html_encode(getPrevImageURL()); ?>" title="<?php echo gettext("Previous Image"); ?>">« <?php echo gettext("prev"); ?></a></li>
                    <?php
                } if (hasNextImage()) {
                    ?>
                    <li class="imgnext"><a href="<?php echo html_encode(getNextImageURL()); ?>" title="<?php echo gettext("Next Image"); ?>"><?php echo gettext("next"); ?> »</a></li>
                    <?php
                }
                ?>
                </ol>
            </span>
			<ol class="breadcrumb">
				<li>
					<?php 
						printHomeLink('', ' / '); printGalleryIndexURL(' / ', getGalleryTitle()); 
						printParentBreadcrumb("", " / ", " / ");
						printAlbumBreadcrumb("", " ");
                    ?>
				</li>
				<li class="active"><?php printImageTitle(); ?></li>
			</ol>
		</div>
	</div>
	<!-- /.row -->
    
	<!-- The Image -->
	<div class="row">
		<div class="col-lg-12 text-center">
        	<div class="thumbnail">
				<?php
                if (isImagePhoto()) {
                    $fullimage = getFullImageURL();
                } else {
                    $fullimage = NULL;
                }
                if (!empty($fullimage)) {
                    ?>
                    <a <?php if(hasNextImage()){ echo "href='".html_encode(getNextImageURL())."'"; } ?>" title="<?php printBareImageTitle(); ?>" class="fullimage">
                        <?php
                    }
                    if (function_exists('printUserSizeImage') && isImagePhoto()) {
                        printUserSizeImage(getImageTitle(),"img-responsive fa-border");
                    } else {
                        printDefaultSizedImage(getImageTitle(),"img-responsive fa-border");
                    }
                    if (!empty($fullimage)) {
                        ?>
                    </a>
                    <?php
                }
                ?>
            </div>
		</div>
		<?php
		if (isImagePhoto())
			//@call_user_func('printUserSizeSelector');
		?>
	</div>
	<!--div id="narrow">
		<?php printImageDesc(); ?>
		<hr /><br />
		<?php
		If (function_exists('printAddToFavorites'))
			printAddToFavorites($_zp_current_image);
		@call_user_func('printSlideShowLink');

		if (getImageMetaData()) {
			printImageMetadata(NULL, 'colorbox_meta');
			?>
			<br class="clearall" />
			<?php
		}
		printTags('links', gettext('<strong>Tags:</strong>') . ' ', 'taglist', '');
		?>
		<br class="clearall" />

		<?php 
		@call_user_func('printGoogleMap'); 
		@call_user_func('printRating'); 
		@call_user_func('printCommentForm'); 
		?>
	</div-->
</div>
<?php include_once('includes/footer.php'); ?>