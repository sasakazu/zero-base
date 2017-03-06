<?php get_header(); ?>


<?php get_sidebar(); ?>


<div class="col-md-8">

  <div id="contents">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div class="entry">
        <p class="enty-date">
          <?php echo get_post_time('F d, Y'); ?>
        </p>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <div class="entry_main">
              <?php the_content(); ?>
          </div>

          <p class="state">
            categoly： <?php the_category(', '); ?>
          </p>


      </div>

    <?php endwhile; endif; ?>

  </div>


</div>








<?php get_footer(); ?>
