<!--
============================================================

     SEARCH FORM
    ==============================

        1. 
        2. 

============================================================
-->


<?php
/**
 * The template for displaying search forms in Shape
 *
 * @package Shape
 * @since Shape 1.0
 */
?>

<form class="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <div class="pseudo-search">

        <!-- Search -->
        <label for="s" class="hidden assistive-text">Search</label>
        <input type="search" 
               id="s"
               name="s" 
               title="s"  
               value="<?php echo esc_attr( get_search_query() ); ?>"
               placeholder="Search..." >

        <!-- Search Sumbit Button -->
        <button class="fa fa-search" type="submit"></button>
<!--
        <input type="submit" 
               class="search-button fa fa-search" 
               name="submit" 
               id="searchsubmit" 
               value="<?php esc_attr_e( 'Search', 'shape' ); ?>" />
-->

    </div>
</form>