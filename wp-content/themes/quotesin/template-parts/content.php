<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package QuotesIn
 */

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
?>
<div <?php post_class( 'item bg-box' ); ?> style="background-image:  url(<?php echo $featured_img_url?>); ">
    <div class="quotebox" >
        <?php the_content(); ?>
    </div>
	<?php the_excerpt(); ?>
</div><!--End Post -->
