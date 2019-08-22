<?php
/**
 * ========================================
 *        Circle Progress Bar
 * ========================================
 */
?>

<div class="progress-pie-chart progress-pie-chart-<?php the_field( 'progress_color' ); ?> overall_uxScore" data-percent="<?php the_field( 'progress_percentage' ); ?>">
	<div class="ppc-progress">
		<div class="ppc-progress-fill ppc-progress-fill-<?php the_field( 'progress_color' ); ?>"></div>
	</div>
	<div class="ppc-percents ppc-percents-<?php the_field( 'progress_color' ); ?>">
		<div class="pcc-percents-wrapper">
			<p><?php the_field( 'progress_label' ); ?></p>
			<span>%</span>
		</div>
	</div>
</div>
