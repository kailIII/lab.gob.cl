<?php get_header() ?>

  <header class="big_title">
    <h2><?php the_title();?></h2>
  </header>

  <section class="featured">
    <div class="gallery">
      <figure class="sel">
        <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/temp/dummy.jpg" alt="Image" /></a>
        <figcaption>
          <header>
            <strong>23.2.2015</strong>
            <span>Category</span>
          </header>
          <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></h3>
          <a href="#" class="btn mid arrow">Leer más</a>
        </figcaption>
      </figure>
      <figure>
        <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/temp/dummy.jpg" alt="Image" /></a>
        <figcaption>
          <header>
            <strong>23.2.2015</strong>
            <span>Category</span>
          </header>
          <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></h3>
          <a href="#" class="btn mid arrow">Leer más</a>
        </figcaption>
      </figure>
    </div>
  </section>

  <nav class="filter">
    <ul>
      <li>Organizar:</li>
      <li><a href="#">Categoria</a></li>
      <li><a href="#">Categoria</a></li>
      <li><a href="#">Categoria</a></li>
      <li><a href="#">Categoria</a></li>
      <li><a href="#">Categoria</a></li>
    </ul>
  </nav>

  <section class="blog grid">

    <div class="columnSize"></div>

    <?php
      $the_query = new WP_Query( array( 'posts_per_page' => 10) );
       while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
    <article class="item <?php if(get_field('is_featured')){ the_field('is_featured'); } ?>">
      <header>
        <strong><?php the_time('F j, Y'); ?></strong>
        <span><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span>
      </header>
      <?php if ( has_post_thumbnail() ) { ?>
        <figure>
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('350W'); ?></a>
        </figure>
      <?php } ?>
      <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
      <a href="<?php the_permalink() ?>" class="btn mid arrow">Leer más</a>
    </article>

    <?php endwhile; wp_reset_query(); ?>
  </section>

  <footer class="load">
    <a href="#" class="btn more"> Cargar Mas</a>
  </footer>

<?php get_footer(); ?>
