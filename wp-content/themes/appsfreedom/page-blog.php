<?php
/*
Template Name: Blog
*/

get_header(); ?>

  <div class=" learning-masthead">
    <div class="container">
    
<?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>        
    </div>
  </div>
  <div class=" blog-panels">
    <div class="container">
      <div class="row">
        <!-- # 1st col -->
        <div class="col-md-4">
          <div class="archive-panel">
            <a href="<?php echo get_category_link( 2 ); ?>"><h3>Enterprise<br /> Mobility</h3></a>
            <ul>
            <?php
              $recent_posts = wp_get_recent_posts(array('numberposts' => 3,
                                      'category' => 2));
              foreach( $recent_posts as $recent ){
                echo '<li class="' . get_field('icon', $recent["ID"]) . '"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
              }
            ?>
            </ul>
            <a href="<?php echo get_category_link( 2 ); ?>" class="button">View All</a>
          </div>
          <div class="archive-panel">
            <a href="<?php echo get_category_link( 3 ); ?>"><h3>Development &amp;<br /> Design</h3></a>
            <ul>
            <?php
              $recent_posts = wp_get_recent_posts(array('numberposts' => 3,
                                      'category' => 3));
              foreach( $recent_posts as $recent ){
                echo '<li class="' . get_field('icon', $recent["ID"]) . '"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
              }
            ?>
            </ul>
            <a href="<?php echo get_category_link( 3 ); ?>" class="button">View All</a>
          </div>
        </div>
        <!-- # 2nd col -->
        <div class="col-md-4">
          <div class="archive-panel">
            <a href="<?php echo get_category_link( 4 ); ?>"><h3>Application <br />Security</h3></a>
            <ul>
            <?php
              $recent_posts = wp_get_recent_posts(array('numberposts' => 3,
                                      'category' => 4));
              foreach( $recent_posts as $recent ){
                echo '<li class="' . get_field('icon', $recent["ID"]) . '"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
              }
            ?>
            </ul>
            <a href="<?php echo get_category_link( 4 ); ?>" class="button">View All</a>
          </div>
          <div class="archive-panel cto">
            <img src="<?php bloginfo('template_url'); ?>/img/tablet-apps.png" alt="" class="img-responsive aligncenter" />
            <p>Bacon ipsum dolor sit amet porchetta rump meatball, jerky tail kevin boudin prosciutto ribeye.</p>
            <a href="<?php echo get_permalink(28); ?>" class="btn primary-button">Take a test drive <span class="btn-arrow"></span></a>
          </div>
        </div>
        <!-- # 3rd col -->
        <div class="col-md-4">
          <div class="archive-panel">
            <a href="<?php echo get_category_link( 5 ); ?>"><h3>Systems <br />Integration</h3></a>
            <ul>
            <?php
              $recent_posts = wp_get_recent_posts(array('numberposts' => 3,
                                      'category' => 5));
              foreach( $recent_posts as $recent ){
                echo '<li class="' . get_field('icon', $recent["ID"]) . '"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
              }
            ?>
            </ul>
            <a href="<?php echo get_category_link( 5 ); ?>" class="button">View All</a>
          </div>
          <div class="archive-panel">
            <a href="<?php echo get_category_link( 6 ); ?>"><h3>Industry <br />Insights</h3></a>
            <ul>
            <?php
              $recent_posts = wp_get_recent_posts(array('numberposts' => 3,
                                      'category' => 6));
              foreach( $recent_posts as $recent ){
                echo '<li class="' . get_field('icon', $recent["ID"]) . '"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
              }
            ?>
            </ul>
            <a href="<?php echo get_category_link( 6 ); ?>" class="button">View All</a>
          </div>
        </div>
      </div>
    </div>
  </div><!-- #blog panels -->
  <div class="container bottom-panels">
    <h2>Enterprise Mobility Learning On the Go</h2>
    <div class="row">
      <!-- # 1st col -->
      <div class="col-md-3">
        <div class="archive-panel">
          <a href="<?php echo get_category_link( 8 ); ?>"><h3>Downloadable PDFs</h3></a>
          <a href="<?php echo get_category_link( 8 ); ?>" class="button">View All</a>
        </div>
      </div>
      <!-- # 2nd col -->
      <div class="col-md-3">
        <div class="archive-panel">
          <a href="<?php echo get_category_link( 9 ); ?>"><h3>Videos</h3></a>
          <a href="<?php echo get_category_link( 9 ); ?>" class="button">View All</a>

        </div>
      </div>
      <!-- # 3rd col -->
      <div class="col-md-3">
        <div class="archive-panel">
          <a href="<?php echo get_category_link( 10 ); ?>"><h3>Infographics</h3></a>
          <a href="<?php echo get_category_link( 10 ); ?>" class="button">View All</a>

        </div>
      </div>
      <!-- # 4th col -->
      <div class="col-md-3">
        <div class="archive-panel">
          <a href="<?php echo get_category_link( 11 ); ?>"><h3>FAQ's</h3></a>
          <a href="<?php echo get_category_link( 11 ); ?>" class="button">View All</a>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
