<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
  <picture class="hero-bg">
    <source
      srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-bg.webp"
      type="image/webp"
      loading="lazy"
    />
    <img
      src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-bg.png"
      alt="Hero background"
      loading="lazy"
    />
  </picture>
  <div class="container">
    <h1>Build Better Websites With Us</h1>
    <p>Custom WordPress solutions that deliver real results.</p>
    <a href="#features" class="cta-btn">Get Started</a>
  </div>
</section>

<!-- Features Section -->
<section id="features" class="features">
  <div class="container">
    <h2>Our Services</h2>
    <div class="feature-grid">
      <div class="feature-card">
        <h3>Theme Development</h3>
        <p>Custom themes built from scratch with performance and SEO in mind.</p>
      </div>
      <div class="feature-card">
        <h3>Plugin Integration</h3>
        <p>We connect your site to powerful plugins and tools you need.</p>
      </div>
      <div class="feature-card">
        <h3>Maintenance & Support</h3>
        <p>Ongoing support to ensure your website runs smoothly every day.</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials">
  <div class="container">
    <h2>What Our Clients Say</h2>
    <div class="testimonial-grid">
      <?php
        $testi_query = new WP_Query([ 'post_type'=>'testimonial','posts_per_page'=>3,'orderby'=>'date','order'=>'DESC' ]);
        if ($testi_query->have_posts()) :
          while ($testi_query->have_posts()) : $testi_query->the_post();
      ?>
        <div class="testimonial-card">
          <?php if (has_post_thumbnail()) : ?>
            <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, ['class'=>'testimonial-thumb-img','loading'=>'lazy','alt'=>get_post_meta(get_post_thumbnail_id(),'_wp_attachment_image_alt',true)]); ?>
          <?php endif; ?>
          <h3><?php the_title(); ?></h3>
          <div class="testimonial-content"><?php the_excerpt(); ?></div>
        </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>