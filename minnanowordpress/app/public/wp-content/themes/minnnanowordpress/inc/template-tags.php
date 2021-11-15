<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package _s
 */

if (!function_exists('posted_on')) :
  /**
   * Prints HTML with meta information for the current post-date/time.
   */
  function posted_on()
  {
    $time_string = '<time datetime="%1$s"><i class="bi bi-clock me-1"></i>%2$s</time>';
    if (get_the_time('U') !== get_the_modified_time('U')) {
      $time_string = '<time datetime="%1$s"><i class="bi bi-clock me-1"></i>%2$s</time><time class="ms-2" datetime="%3$s"><i class="bi bi-arrow-clockwise me-1"></i>%4$s</time>';
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
      esc_html_x('%s', 'post date'),
      $time_string
    );

    echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

  }
endif;

if (!function_exists('posted_by')) :
  /**
   * Prints HTML with meta information for the current author.
   */
  function posted_by()
  {
    $byline = sprintf(
      /* translators: %s: post author. */
      esc_html_x('%s', 'post author'),
      '<span class="author vcard"><i class="bi bi-vector-pen me-1"></i><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
    );

    echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

  }
endif;

if (!function_exists('entry_footer')) :
  /**
   * Prints HTML with meta information for the categories, tags and comments.
   */
  function entry_footer()
  {
    // Hide category and tag text for pages.
    if ('post' === get_post_type()) {
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
          $tags_list .= '<a class="inline-block rounded text-decoration-none ms-1 px-1 py-1 bg-white text-dark border border-dark small" href="' . get_category_link($tag->term_id) . '"><i class="bi bi-tag-fill"></i>
          ' . esc_html($tag->name) . '</a>';
        }
      }
      if ($tags_list) {
        /* translators: 1: list of tags. */
        printf('<div class="small mt-2">' . esc_html__('%1$s', 'minnanowordpress') . '</div>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      }
    }

    if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
      echo '<span class="comments-link">';
      comments_popup_link(
        sprintf(
          wp_kses(
            /* translators: %s: post title */
            __('<span class="screen-reader-text">%sに</span>コメントする'),
            array(
              'span' => array(
                'class' => array(),
              ),
            )
          ),
          wp_kses_post(get_the_title())
        )
      );
      echo '</span>';
    }

    edit_post_link(
      sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __('Edit <span class="screen-reader-text">%s</span>', '_s'),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        wp_kses_post(get_the_title())
      ),
      '<span class="edit-link">',
      '</span>'
    );
  }
endif;

if (!function_exists('post_thumbnail')) :
  /**
   * Displays an optional post thumbnail.
   *
   * Wraps the post thumbnail in an anchor element on index views, or a div
   * element when on single views.
   */
  function post_thumbnail()
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

      <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
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
      </a>

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
