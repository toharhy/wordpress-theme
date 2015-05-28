<?php get_header();  ?>

<div class="main">
  <div class="container">
  
    <div class="content">

    <div class="leftList">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eos alias blanditiis mollitia dolor ullam eligendi culpa, necessitatibus ratione molestiae minima, enim quia delectus consequuntur, provident officia corporis nemo maxime.</p>
    </div>
    <div class="rightList">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum dolorem explicabo quidem eius eligendi repellat consectetur velit deserunt mollitia doloremque modi perspiciatis, tempora, in architecto distinctio sint quaerat doloribus dicta.</p>
      
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