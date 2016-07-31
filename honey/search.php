<?php get_header(); ?>

  <div id="content-div">
    <div class="content-limiter">
      <div id="main" class="container">

          <?php if ( have_posts() ) : ?>
            <div class="search-title">
              <p class="search-title"><?php printf( esc_html__( 'Search Results for: %s', 'honey' ), '<span>' . get_search_query() . '</span>' ); ?></p>
            </div>

            <?php while ( have_posts() ) : the_post(); ?>

              <?php get_template_part( 'content', 'search' ); ?>

            <?php endwhile; ?>

          <?php else : ?>

            <div class="search-title">
              <p class="search-title">Hey, there is no content!</p>
            </div>
            <p>No Content</p>

          <?php endif;?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
