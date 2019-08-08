<?php 
// <!-- 
// ========================================
//        LINK LIST TEMPLATE
// ======================================== --> ?>


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
                <i class="fa <?php echo $link_icon; ?>"></i>
            <?php endif; ?> 

            <?php if( $link_text ): ?>
                <span><?php echo $link_text; ?></span>
            <?php endif; ?>    

        </a>

	<?php endwhile; ?>

	</div>

<?php endif; ?>