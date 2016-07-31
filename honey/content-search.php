<?php get_header(); ?>

  <div id="content-div">
    <div class="content-limiter">
      <div id="main" class="container">

          <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $the_query = new WP_Query( 'posts_per_page=10&paged=' . $paged );
          ?>

          <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>


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
