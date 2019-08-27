<?php
/**
 * ========================================
 *        Icon Title Block
 * ========================================
 */
?>

<?php
	$title_icon		= get_field('title_icon');
	$title_text		= get_field('title_text');
	$title_subText	= get_field('title_subText');
	$heading_level	= get_field('heading_level');
?>

<<?php if($heading_level): ?><?php echo $heading_level; ?><?php endif; ?> class="iconTitle">

	<?php if( $title_icon ): ?>
		<i class="<?php echo $title_icon; ?>"></i>
	<?php endif; ?>

	<?php if( $title_text ): ?>
		<span><?php echo $title_text; ?></span>
	<?php endif; ?>

	<?php if( $title_subText ): ?>
		<span class="title_subText"><?php echo $title_subText; ?></span>
	<?php endif; ?>

</<?php if($heading_level): ?><?php echo $heading_level; ?><?php endif; ?>>
