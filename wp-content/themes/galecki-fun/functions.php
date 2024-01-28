<?php

function twentytwentyone_styles() {
  wp_enqueue_style(
    'child-style',
    get_stylesheet_uri(),
    ['twenty-twenty-one-style'],
    wp_get_theme()->get('Version')
  );
}

add_action('wp_enqueue_scripts', 'twentytwentyone_styles');

/**
 * Prints HTML with meta information about theme author.
 *
 * Modified from parent theme to only display author info when logged in.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_posted_by() {
  if ( is_user_logged_in() && ! get_the_author_meta( 'description' ) && post_type_supports( get_post_type(), 'author' ) ) {
    echo '<span class="byline">';
    printf(
      /* translators: %s: Author name. */
      esc_html__( 'By %s', 'twentytwentyone' ),
      '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author">' . esc_html( get_the_author() ) . '</a>'
    );
    echo '</span>';
  }
}
