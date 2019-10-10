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

        <?php wp_dropdown_categories( 'show_option_all=All Categories' ); ?>

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

<form role="search" method="get" id="searchform" action="<?php bloginfo('siteurl'); ?>">
  <div>
    <label class="screen-reader-text" for="s">Search for:</label>
    <input type="text" value="" name="s" id="s" />
    in <?php wp_dropdown_categories( 'show_option_all=All Categories' ); ?>
    <input type="submit" id="searchsubmit" value="Search" />
  </div>
</form>

<button class="btn btn--subtle btn--icon" aria-controls="modal-search">
  <svg class="icon" viewBox="0 0 24 24"><title>Toggle search</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10"><line x1="22" y1="22" x2="15.656" y2="15.656"></line><circle cx="10" cy="10" r="8"></circle></g></svg>
</button>

<div class="modal modal--search js-modal" id="modal-search" data-animation="on">
  <form class="full-screen-search">
    <label for="searchInputX" class="sr-only">Search</label>
    <input class="reset full-screen-search__input" type="search" name="searchInputX" id="searchInputX" placeholder="Search...">
    <button class="reset full-screen-search__btn">
      <svg class="icon" viewBox="0 0 24 24"><title>Search</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10"><line x1="22" y1="22" x2="15.656" y2="15.656"></line><circle cx="10" cy="10" r="8"></circle></g></svg>
    </button>
  </form>

  <button class="reset modal__close-btn js-modal__close">
    <svg class="icon" viewBox="0 0 16 16"><title>Close modal window</title><g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line><line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line></g></svg>
  </button>
</div>
