<?php get_header(); ?>

<div class="container">
  <div class="grid">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>

      <div class="post">
        <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>
        <?php endif; ?>

        <div class="post-content">
          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>">Citește →</a>
        </div>
      </div>

    <?php endwhile; endif; ?>

  </div>
</div>

<?php get_footer(); ?>