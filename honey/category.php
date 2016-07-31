<?php
/*
Template Name: Category
*/
 ?>

 <?php get_header(); ?>

  <div id="content-div">
    <div class="content-limiter">
      <div id="main" class="container">

          <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $the_query_cat = new WP_Query( 'posts_per_page=3&paged=' . $paged );
          ?>

          <?php if ($the_query_cat->have_posts()) : while ($the_query_cat->have_posts()) : $the_query_cat->the_post(); ?>


              <div class="journal-content">
                <div class="posts">
                  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                  <hr>
                  <div class="subtitle">
                    <p class="subtitle"><i><?php the_time('l, F jS, Y') ?></i></p>
                  </div>
                  <?php if (has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                      <?php the_post_thumbnail(); ?>
                    </a>
                  <?php endif; ?>
                </div>
              </div>



        <?php endwhile; ?>

        <?php

        // next_posts_link() usage with max_num_pages
        //next_posts_link( 'Older Entries', $the_query_cat->max_num_pages );
        //previous_posts_link( 'Newer Entries' );
        wp_pagenavi( array( 'query' => $the_query_cat ) );

        ?>

        <?php
        // clean up after the query and pagination
        wp_reset_postdata();
        ?>

        <?php else : ?>

          <div class="posts">
            <h1>Hey, there is no content!</h1>
          </div>
          <p>No Content</p>

        <?php endif;?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
