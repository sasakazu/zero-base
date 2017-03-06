<?php get_header(); ?>
<?php get_sidebar(); ?>


<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <div class="about-main col-md-8">

    <h2><?php the_title(); ?></h2>

    <p><?php the_content(); ?></p>

  </div>

<?php endwhile; endif; ?>



<?php get_footer(); ?>
