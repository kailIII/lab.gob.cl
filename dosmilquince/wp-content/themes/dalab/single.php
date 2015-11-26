<?php /* Template Name: Section - Blog */ ?>

<?php get_header() ?>
  <section class="big_title">
    <h2>Blog</h2>
  </section>

  <section class="single-post">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <aside>
        <div class="box">
          <h5>Categorias</h5>
          <?php the_category(); ?>
          <h5>Tags</h5>
          <?php the_tags( ' ', ', ', ' ' ); ?>
        </div>
        <div class="box">
          <h5>Compartir</h5>
        </div>
      </aside>
      <article class="the-post">
        <header>
          <strong><?php the_date() ?></strong>
          <h1><?php the_title() ?></h1>
        </header>
        <?php if ( has_post_thumbnail() ) { ?>
          <figure>
            <?php the_post_thumbnail('1024W'); ?>
            <figcaption>
              <?php echo get_post(get_post_thumbnail_id())->post_content; ?>
            </figcaption>
          </figure>
        <?php } ?>
        <?php the_content(); ?>
      </article>
    <?php endwhile; endif; ?>
  </section>

  <section class="single-related">
    <h5>Relacionados</h5>
    <?php
      $categories = get_the_category();
      $main_cat = $categories->cat_ID;
      query_posts('orderby=rand&showposts=3&cat='.$main_cat.'');
      while ( have_posts() ) : the_post();
    ?>
    <article class="item">
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

<?php get_footer(); ?>
