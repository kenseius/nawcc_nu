<?php
/**
 * ========================================
 *        Check List Block
 * ========================================
 */
?>


<?php if( have_rows('link_list') ): ?>

	<div class="buttonList">

	<?php while( have_rows('link_list') ): the_row();

    // vars
    $link_icon = get_sub_field('link_icon');
    $link_text = get_sub_field('link_text');
    $link_url = get_sub_field('link_url');

    ?>

    <?php if( $link_url ): ?>
        <a href="<?php echo $link_url; ?>">
    <?php endif; ?>

            <?php if( $link_icon ): ?>
                <i class="<?php echo $link_icon; ?>"></i>
            <?php endif; ?>

            <?php if( $link_text ): ?>
                <span><?php echo $link_text; ?></span>
            <?php endif; ?>

        </a>

	<?php endwhile; ?>

	</div>

<?php endif; ?>

<form class="taskList">

    <div class="task">
      <label class="control checkbox" for="task">
        <input data-val="true" data-val-enforcetrue="You must agree to the Terms of Service before you can Create an Account." id="AgreeToTerms" name="AgreeToTerms" value="true" aria-required="true" aria-describedby="AgreeToTerms-error" type="checkbox">
        <input name="AgreeToTerms" value="false" type="hidden">
        <span class="control__indicator"></span>
      </label>
      <div>
        <p class="has-medium-font-size">Well then! Now I simply must agree and now I simply must agree!</p>
        <p>Details:</p>
        <ul>
            <li>hotdogs</li>
            <li>carrots</li>
        </ul>
      </div>
    </div>

</form>
