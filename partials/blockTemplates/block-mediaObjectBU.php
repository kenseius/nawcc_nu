<?php
/**
 * ========================================
 *        Media Object
 *     aka Post List Item
 *
 *  expected css:
 *   .postlist > a > img + div
 * ========================================
 */
?>

<?php

	$text_color         = get_field( 'text_color' );
	$background_color   = get_field( 'background_color' ); // ?: '#ffffff';

	$background_image   = get_field( 'background_image');
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail', true);
	$image = $thumb_url_array[0];
	// doesn't work for some reason? todo: remove if no errors from thumb_id code

?>

<a href="<?php the_permalink(); ?>">

	<?php if($background_image): ?>
		<img src="<?php echo $background_image; ?>">
		<?php elseif (has_post_thumbnail () ): ?><img src="<?php echo $image; ?>">
		<?php elseif (has_post_thumbnail () ): ?><img src="<?php echo $image; ?>">
	<?php endif; ?>

	<div>
		<!-- <p class="subtitle"><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></p>-->
		<h4><?php the_title(); ?></h4>
		<?php if ( get_field( 'is_this_an_event' ) == 1 ): ?>
			<p class="date"><?php the_field( 'event_weekday' ); ?>, <?php the_field( 'event_date' ); ?> | <?php the_field( 'event_startTime' ); ?> - <?php the_field( 'event_endTime' ); ?></p>
		<?php endif; ?>
		<!-- <div class="meta meta_article">
			<?php if ( get_field( 'is_this_an_event' ) == 1 ): ?>
				<p class="date"><?php the_field( 'event_weekday' ); ?>, <?php the_field( 'event_date' ); ?> | <?php the_field( 'event_startTime' ); ?> - <?php the_field( 'event_endTime' ); ?></p>
			<?php endif; ?>
			<p>Written by <?php the_author(); ?></p>
			<p><time><?php $the_time = the_time('F jS, Y'); if ($the_time) { echo $the_time ;} ?></time></p>
		</div> -->
		<p><?php the_excerpt(); ?></p>
	</div>

</a>
