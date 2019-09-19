<?php
/**
 * ========================================
 *        Icon Button
 * ========================================
 */
?>

<?php
	$buttonIcon 		= get_field('button_icon');
	$buttonText 		= get_field('button_text');
	$buttonBackground 	= get_field('button_Background');
	$buttonURL 			= get_field('button_URL');
?>

<a class="iconButtonHyperlink <?php echo $buttonBackground; ?>" <?php if( $buttonURL ): ?>href="<?php echo $buttonURL; ?>"<?php endif; ?>>
	<?php if( $buttonIcon ): ?>
		<i class="<?php echo $buttonIcon; ?>"></i>
	<?php endif; ?>
	<?php if( $buttonText ): ?>
		<p><?php echo $buttonText; ?></p>
	<?php endif; ?>
</a>
