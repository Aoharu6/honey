<?php get_header(); ?>

  <div id="content-div" class="single">
    <div class="content-limiter">
      <div id="main">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


              <article class="new-post">
                <div class="banner-img">
                  <?php if (has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                      <?php the_post_thumbnail(); ?>
                    </a>
                  <?php endif; ?>
                <div>
                <div class="post-entry">
                  <div class="post-entry-limiter">
                    <header class="post-entry-header">
                      <h2 class="post-entry"><?php the_title(); ?></h2>

                      <p class="post-entry subtitle"><i><?php the_time('l, F jS, Y') ?></i></p>
                    </header>

                    <div class="blog-content">
                      <?php the_content(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                </article>

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
