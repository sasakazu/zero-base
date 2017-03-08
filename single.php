
<?php get_header(); ?>

<?php get_sidebar(); ?>




<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

   <div class="post col-md-8">
     <div class="post-date">
       <p><?php echo get_post_time('F d, Y'); ?></p>
     </div>

     <h1><?php the_title(); ?></h1>

     <p><?php the_content(); ?>  </p>

   </div>

  <?php endwhile; ?>

  <?php else : ?>

    <h2>Not Found</h2>
    <p>ごめんなさい ... 記事がありませんでした ...</p>

  <?php endif; ?>



<?php get_footer(); ?>
