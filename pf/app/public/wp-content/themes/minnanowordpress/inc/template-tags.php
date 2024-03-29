<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package minnanowordpress
 */

if (!function_exists('minnanowordpress_posted_on')) :
  /**
   * Prints HTML with meta information for the current post-date/time.
   */
  function minnanowordpress_posted_on()
  {
    $time_string = '<time class="entry-date published updated small" datetime="%1$s"><i class="bi bi-clock me-1"></i>%2$s</time>';
    if (get_the_time('U') !== get_the_modified_time('U')) {
      $time_string = '<time class="entry-date published small" datetime="%1$s"><i class="bi bi-clock me-1"></i>%2$s</time><time class="updated small ms-2" datetime="%3$s"><i class="bi bi-arrow-clockwise me-1"></i>%4$s</time>';
    }

    $time_string = sprintf(
      $time_string,
      esc_attr(get_the_date(DATE_W3C)),
      esc_html(get_the_date()),
      esc_attr(get_the_modified_date(DATE_W3C)),
      esc_html(get_the_modified_date())
    );

    $posted_on = sprintf(
      /* translators: %s: post date. */
      esc_html_x('%s', 'post date', 'minnanowordpress'),
      $time_string
    );

    echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

  }
endif;

if (!function_exists('minnanowordpress_posted_by')) :
  /**
   * Prints HTML with meta information for the current author.
   */
  function minnanowordpress_posted_by()
  {
    $byline = sprintf(
      /* translators: %s: post author. */
      esc_html_x('by %s', 'post author', 'minnanowordpress'),
      '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
    );

    echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

  }
endif;

if (!function_exists('minnanowordpress_entry_footer')) :
  /**
   * Prints HTML with meta information for the categories, tags and comments.
   */
  function minnanowordpress_entry_footer()
  {
    // Hide category and tag text for pages.
    if ('post' === get_post_type()) {
      /* translators: used between list items, there is a space after the comma */
      // $categories_list = get_the_category_list(esc_html__(', ', 'minnanowordpress'));
      // if ($categories_list) {
      //   /* translators: 1: list of categories. */
      //   printf('<span class="cat-links small">' . esc_html__('%1$s', 'minnanowordpress') . '</span>', $categories_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      // }

      $categories = get_the_category();
      $categories_list = "";
      if ($categories) {
        foreach ($categories as $cat) {
          $categories_list .= '<a class="inline-block rounded text-decoration-none ms-1 px-2 py-1 bg-dark text-white " href="' . get_category_link($cat->term_id) . '"><i class="bi bi-folder-fill"></i>
          ' . esc_html($cat->name) . '</a>';
        }
      }
      printf('<div class="small mt-2">' . esc_html__('%1$s', 'minnanowordpress') . '</div>', $categories_list);

      /* translators: used between list items, there is a space after the comma */
      $tags = get_the_tags();
      $tags_list = "";
      if ($tags) {
        foreach ($tags as $tag) {
          $tags_list .= '<a class="inline-block rounded text-decoration-none ms-1 px-2 py-1 bg-white text-dark border border-dark" href="' . get_category_link($tag->term_id) . '"><i class="bi bi-tag"></i>
          ' . esc_html($tag->name) . '</a>';
        }
      }
      if ($tags_list) {
        /* translators: 1: list of tags. */
        printf('<div class="small mt-2">' . esc_html__('%1$s', 'minnanowordpress') . '</div>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      }
    }

    // if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
    //   echo '<span class="comments-link">';
    //   comments_popup_link(
    //     sprintf(
    //       wp_kses(
    //         /* translators: %s: post title */
    //         __('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'minnanowordpress'),
    //         array(
    //           'span' => array(
    //             'class' => array(),
    //           ),
    //         )
    //       ),
    //       wp_kses_post(get_the_title())
    //     )
    //   );
    //   echo '</span>';
    // }

    edit_post_link(
      sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __('Edit <span class="screen-reader-text">%s</span>', 'minnanowordpress'),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        wp_kses_post(get_the_title())
      ),
      '<div class="edit-link">',
      '</div>'
    );
  }
endif;

if (!function_exists('minnanowordpress_post_thumbnail')) :
  /**
   * Displays an optional post thumbnail.
   *
   * Wraps the post thumbnail in an anchor element on index views, or a div
   * element when on single views.
   */
  function minnanowordpress_post_thumbnail()
  {
    if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
      return;
    }

    if (is_singular()) :
?>

      <div class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
      </div><!-- .post-thumbnail -->

    <?php else : ?>

      <!-- TODO: ブログindexではサムネ非表示 -->
      <!-- <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
        <?php
        the_post_thumbnail(
          'post-thumbnail',
          array(
            'alt' => the_title_attribute(
              array(
                'echo' => false,
              )
            ),
          )
        );
        ?>
      </a> -->

<?php
    endif; // End is_singular().
  }
endif;

if (!function_exists('wp_body_open')) :
  /**
   * Shim for sites older than 5.2.
   *
   * @link https://core.trac.wordpress.org/ticket/12563
   */
  function wp_body_open()
  {
    do_action('wp_body_open');
  }
endif;
