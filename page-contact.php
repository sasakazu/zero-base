

<?php get_header(); ?>
<?php get_sidebar(); ?>




<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <div class="col-md-8 contact-main">
    <h1><?php the_title(); ?></h1>

    <div class="contact-contents">

    <p><?php the_content(); ?></p>

    </div>
  </div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
