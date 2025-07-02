<?php get_header(); ?>

<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="testimonial-single">

      <?php if (has_post_thumbnail()) : ?>
        <div class="testimonial-thumb">
          <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, ['class'=>'testimonial-thumb-img','loading'=>'lazy','alt'=>get_post_meta(get_post_thumbnail_id(),'_wp_attachment_image_alt',true)]); ?>
        </div>
      <?php endif; ?>

      <h1><?php the_title(); ?></h1>
      <div class="testimonial-content"><?php the_content(); ?></div>

    </article>
  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>