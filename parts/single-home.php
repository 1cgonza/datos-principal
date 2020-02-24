<nav class="homeNav center">
  <h2>Cursos</h2>
  <ul>
    <?php wp_nav_menu(array(
      'theme_location' => 'main',
      'container' => false,
      'items_wrap' => '%3$s'
    )); ?>
  </ul>
</nav>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="pageContent"><?php the_content(); ?></div>
<?php endwhile; endif; ?>