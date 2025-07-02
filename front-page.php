<?php get_header(); ?>

<section
  class="hero"
  style="background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-bg.png') no-repeat center/center/cover;">
  <div class="container">
    <h1>Build Better Websites With Us</h1>
    <p>Custom WordPress solutions that deliver real results.</p>
    <a href="#features" class="cta-btn">Get Started</a>
  </div>
</section>

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

<?php get_footer(); ?>

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials">
  <div class="container">
    <h2>What Our Clients Say</h2>
    <div class="testimonial-grid">
      <?php
        $testi_query = new WP_Query([
          'post_type'      => 'testimonial',
          'posts_per_page' => 3,
          'orderby'        => 'date',
          'order'          => 'DESC',
        ]);
        if ( $testi_query->have_posts() ) :
          while ( $testi_query->have_posts() ) : $testi_query->the_post();
      ?>
        <div class="testimonial-card">
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="testimonial-thumb">
              <?php the_post_thumbnail('medium'); ?>
            </div>
          <?php endif; ?>
          <h3><?php the_title(); ?></h3>
          <div class="testimonial-content">
            <?php the_excerpt(); ?>
          </div>
        </div>
      <?php
          endwhile;
          wp_reset_postdata();
        endif;
      ?>
    </div>
  </div>
</section>
