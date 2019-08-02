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

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <div class="pseudo-search">

        <!-- Search -->
        <label for="s" class="assistive-text"><?php _e( 'Search', 'shape' ); ?></label>
        <input type="search" 
               id="s"
               name="s" 
               title="s"  
               value="<?php echo esc_attr( get_search_query() ); ?>"
               placeholder="Search... | <?php esc_attr_e( 'Search &hellip;', 'shape' ); ?>" >

        <!-- County - Select Dropdown --
        <label class="hidden" for="countyCode">County</label>
        <select name="countyCode">
            <option value="" disabled selected>County</option>
            <option value="Perry">Perry</option>
            <option value="Dauphin">Dauphin</option>
        </select>

        -- Gender - Select Dropdown --
        <label class="hidden" for="gender">Gender</label>
        <select name="gender">
            <option value="" disabled selected>Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> -->

        <!-- Search Sumbit Button -->
<!--        <button class="fa fa-search" type="submit"></button>-->
        <input type="submit" 
               class="fa fa-search" 
               name="submit" 
               id="searchsubmit" 
               value="<?php esc_attr_e( 'Search', 'shape' ); ?>" />

    </div>
<form>