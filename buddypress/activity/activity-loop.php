<?php
/**
 * BuddyPress - Activity Loop
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 * @version 3.0.0
 */

/**
 * Fires before the start of the activity loop.
 *
 * @since 1.2.0
 */
do_action( 'bp_before_activity_loop' ); ?>

<?php if ( bp_has_activities( bp_ajax_querystring( 'activity' ) ) ) : ?>

	<?php if ( empty( $_POST['page'] ) ) : ?>

		<!-- <ul id="activity-stream" class="activity-list item-list"> -->
		<section class="postList circleImages" id="activity-stream">

	<?php endif; ?>

	<?php while ( bp_activities() ) : bp_the_activity(); ?>


		<!-- <div class="vkpb-card-item <?php bp_activity_css_class(); ?>" id="activity-<?php bp_activity_id(); ?>"> -->

			<?php bp_get_template_part( 'activity/entry' ); ?>

		<!-- </div> -->

	<?php endwhile; ?>

	<?php if ( bp_activity_has_more_items() ) : ?>

		<div class="load-more">
			<a href="<?php bp_activity_load_more_link() ?>"><?php _e( 'Load More', 'buddypress' ); ?></a>
		</div>

	<?php endif; ?>

	<?php if ( empty( $_POST['page'] ) ) : ?>

	</section>

	<?php endif; ?>

<?php else : ?>

	<div id="message" class="info">
		<p><?php _e( 'Sorry, there was no activity found. Please try a different filter.', 'buddypress' ); ?></p>
	</div>

<?php endif; ?>

<?php

/**
 * Fires after the finish of the activity loop.
 *
 * @since 1.2.0
 */
do_action( 'bp_after_activity_loop' ); ?>

<?php if ( empty( $_POST['page'] ) ) : ?>

	<form action="" name="activity-loop-form" id="activity-loop-form" method="post">

		<?php wp_nonce_field( 'activity_filter', '_wpnonce_activity_filter' ); ?>

	</form>

<?php endif;
