<?php get_header(); ?>


<?php get_sidebar(); ?>

<h1>rttt</h1>


<?php if (have_posts()) :
  while (have_posts()) : the_post();

   echo get_the_date();

  endwhile;

  else : ?>
  <div class="post">
    <h2>記事はありません</h2>
    <p>お探しの記事は見つかりませんでした。</p>
  </div>


<?php endif; ?>



<?php get_footer(); ?>
