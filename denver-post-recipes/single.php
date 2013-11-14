<?php get_header(); ?>
        <div id="single_left">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <h1><?php the_title(); ?></h1>
                  <div class="single_content touch_list">
                  <?php the_content(); ?>
                  </div><!--//single_content-->
                  <br /><br />
                  <?php comments_template(); ?>                        
                  <div class="clear"></div>
            <?php endwhile; else: ?>
                <h3>Sorry, no posts matched your criteria.</h3>
            <?php endif; ?>    
        </div><!--//single_left-->
<?php get_footer(); ?>