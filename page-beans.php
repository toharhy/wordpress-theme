<?php get_header();  ?>

<div class="main">
  <div class="container">
  
    <div class="content beansPage">
    <!-- first row begin -->
    <div class="rowBeans">
      <div class="triple">
        <img src="" alt="">
          <h3 class="beansTitle">Beans 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nostrum, dolor pariatur eveniet.</p>
      </div>
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