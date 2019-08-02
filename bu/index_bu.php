<?php get_header(); ?>

	<main class="code4pa_saveTheDate">

		<!-- TITLE -->
		<h1>Pennsylvania Hackathon</h1>
	    <p class="code4pa_Subtitle">Save The Date</p>

		<!-- LOGO - SVG -->
		<?php get_template_part( 'partials/material', 'SaveTheDate_Logo' ); ?>

		<div class="code4pa_left_wrapper">

			<!-- WHEN -->
			<?php get_template_part( 'partials/material', 'SaveTheDate_When' ); ?>

			<!-- WHERE -->
			<?php get_template_part( 'partials/material', 'SaveTheDate_Where' ); ?>

		</div>

		<!-- STAY UPDATED -->
		<?php get_template_part( 'partials/material', 'SaveTheDate_StayUpdated' ); ?>

		<!-- LOCATION -->
		<?php get_template_part( 'partials/material', 'SaveTheDate_PresentedBy' ); ?>

	</main>

<?php get_footer(); ?>
