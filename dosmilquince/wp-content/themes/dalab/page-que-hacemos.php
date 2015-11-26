<?php get_header() ?>

  <section class="big_title">
    <h2><?php the_title() ?></h2>
  </section>

  <section class="single-post">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="the-post">
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
      <aside class="intersitial">
        <?php if( have_rows('childs') ): while( have_rows('childs') ): the_row(); ?>
          <article>
            <strong><?php the_sub_field('title'); ?></strong>
            <h3><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('content'); ?></a></h3>
            <a href="<?php the_sub_field('link'); ?>" class="btn big black">Ver mas</a>
          </article>
        <?php endwhile; endif; ?>
      </aside>
    <?php endwhile; endif; ?>
  </section>

<?php get_footer(); ?>
