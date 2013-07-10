<?php
global $post_meta; 
$tags = array();
foreach(wp_get_post_terms($post->ID, 'portfolio-tag') as $tag){
	$tags[] = $tag;
}
?>

<div class="portfolio-info">
	<h6><a href="<?=get_permalink();?>"><?=get_the_title();?></a></h6>
	<?php if(!empty($tags)) { ?>
		<span class="portfolio-tags">
			<?=horizon_format_tags($tags);?>
		</span>
	<?php } ?>
</div>