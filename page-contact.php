

<?php get_header(); ?>
<?php get_sidebar(); ?>




<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <div class="col-md-8">

    <h2><?php the_title(); ?></h1>

    <?php the_content(); ?>

  </div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
