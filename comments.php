
<secton class="post_content">
    <ul style="list-style:none;">
        <?php  wp_list_comments(); ?>
    </ul>
</section>
<?php /* comment_form(array('title_reply'=>'Got Something To Say:')); */ ?>

<?php
    $fields =  array(
        'author' =>
            '<div class="formgroup"><label class="comment-form-author TEST" for="author">' .
                '<span>' . __( 'Name' ) . '</span> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                '<input id="author" name="author" type="text" placeholder="Author" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />
            </label></div>',
        'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
            '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
        'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Website' ) . '</label>' .
            '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
    );
    $comments_args = array(
        'fields' =>  $fields,
        'comment_field' => '<p class="TEST comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>'
    );
    comment_form($comments_args);
?>
