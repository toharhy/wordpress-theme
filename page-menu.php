<?php get_header();  ?>

<div class="main">
  <div class="container">

  <p>Editing page.php</p>
    <div class="content">

      <div class="leftlist">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, numquam.</p>
      </div>

      <div class="rightlist">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, numquam.</p>
      </div>


      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>