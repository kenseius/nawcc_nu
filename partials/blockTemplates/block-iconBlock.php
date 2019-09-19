<?php
/**
 * ========================================
 *        Icon Block
 * ========================================
 */
?>

<?php $post_icon = get_field('post_icon'); ?>
<?php if( $post_icon ): ?>
	<i class="<?php echo $post_icon; ?>"></i>
<?php endif; ?>
