<?php get_header(); ?>

<div class="container">
  <h1>Testimonials</h1>
  <div class="testimonial-list">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="testimonial-item">
        <?php if (has_post_thumbnail()) : ?>
          <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'thumbnail', false, ['loading'=>'lazy','alt'=>get_post_meta(get_post_thumbnail_id(),'_wp_attachment_image_alt',true)]); ?>
        <?php endif; ?>
        <?php the_title('<h2>','</h2>'); ?>
        <div><?php the_content(); ?></div>
      </div>
    <?php endwhile; endif; ?>
  </div>
</div>

<?php get_footer(); ?>