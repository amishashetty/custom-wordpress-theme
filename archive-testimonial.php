<?php get_header(); ?>

<div class="container">
  <h1>Testimonials</h1>
  <div class="testimonial-list">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="testimonial-item">
        <?php the_title('<h2>','</h2>'); ?>
        <div><?php the_content(); ?></div>
      </div>
    <?php endwhile; endif; ?>
  </div>
</div>

<?php get_footer(); ?>