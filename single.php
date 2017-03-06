
<?php get_header(); ?>

<?php get_sidebar(); ?>




<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

   <div class="post">
     <?php the_title(); ?>
     <?php the_content(); ?>
   </div>

  <?php endwhile; ?>

  <?php else : ?>

    <h2>Not Found</h2>
    <p>ごめんなさい ... 記事がありませんでした ...</p>

  <?php endif; ?>



<?php get_footer(); ?>
