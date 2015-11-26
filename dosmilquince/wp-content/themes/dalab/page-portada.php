<?php get_header() ?>

  <section class="featured">
    <header class="big_title">
      <h2>Creando juntos nuevos servicios públicos</h2>
    </header>
    <div class="main_gallery">
      <div class="scroller">
        <figure class="sel">
          <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/temp/dummy.jpg" alt="Image" /></a>
          <figcaption>
            <p>
              <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
            </p>
          </figcaption>
        </figure>
        <figure>
          <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/temp/dummy.jpg" alt="Image" /></a>
          <figcaption>
            <p>
              <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
            </p>
          </figcaption>
        </figure>
      </div>
    </div>
  </section>

  <section class="intersitial">
    <?php
      $posts = get_field('featured_trio');
      if( $posts ):
    ?>
      <?php foreach( $posts as $p ):?>
        <article>
          <strong><?php the_field('title', $p->ID); ?></strong>
          <h3><a href="<?php echo get_permalink( $p->ID ); ?>"><?php the_field('content', $p->ID); ?></a></h3>
          <a href="<?php echo get_permalink( $p->ID ); ?>" class="btn big black">Ver mas</a>
        </article>
      <?php endforeach; ?>
    <?php endif; ?>
  </section>

  <section class="blog grid">
    <h5>Blog</h5>
    <div class="columnSize"></div>
    <?php
      $posts = get_field('featured_blog');
      if( $posts ):
      foreach( $posts as $post):
      setup_postdata($post);
    ?>
      <article class="item <?php if(get_field('is_featured') == "featured") echo('double'); ?>">
        <header>
          <strong>23.2.2015</strong>
          <span>Category</span>
        </header>
        <?php if ( has_post_thumbnail() ) { ?>
          <a href="<?php the_permalink();?>" class="thumb">
             <?php the_post_thumbnail( '350w'); ?>
          </a>
        <?php } ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <a href="<?php the_permalink(); ?>" class="btn mid arrow">Leer más</a>
      </article>
    <?php endforeach; wp_reset_postdata(); endif; ?>
  </section>

  <section class="calls">
  </section>

<?php get_footer(); ?>
