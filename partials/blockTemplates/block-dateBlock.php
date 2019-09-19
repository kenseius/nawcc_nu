<?php
/**
 * ========================================
 *        Date Block
 * ========================================
 */
?>

<?php
	$startTime		= get_field('event_startTime');
	$endTime		= get_field('event_endTime');
	$date 			= get_field('event_date', false, false); // get raw date
	$date 			= new DateTime($date); // make date object
?>

<p class="dateBox">

	<?php if( $date ): ?>
		 <span class="dB_month"><?php echo $date->format('F'); ?></span>
		 <span class="dB_day"><?php echo $date->format('j'); ?></span>
	<?php endif; ?>

	<?php if( $startTime ): ?>
		<span class="dB_hours">
			<?php echo $startTime; ?> - <?php echo $endTime; ?>
		</span>
	<?php endif; ?>

</p>
