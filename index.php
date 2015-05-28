<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
<!--     1st Div -->		
		<div class="quarter">
			<h3 class="beansTitle">Malapascua</h3>
			<img src="" alt="">
			<p>Lorem ipsum dolor sit amet.</p>
			<button class="beansButton">See Menu</button>
		</div>
<!--     2nd Div -->		
		<div class="quarter">
			<h3 class="beansTitle">Malapascua</h3>
			<img src="" alt="">
			<p>Lorem ipsum dolor sit amet.</p>
			<button class="beansButton">See Menu</button>
		</div>
<!--     3rd Div -->		
		<div class="quarter">
			<h3 class="beansTitle">Malapascua</h3>
			<img src="" alt="">
			<p>Lorem ipsum dolor sit amet.</p>
			<button class="beansButton">See Menu</button>
		</div>
<!--     4th Div -->		
		<div class="quarter">
			<h3 class="beansTitle">Malapascua</h3>
			<img src="" alt="">
			<p>Lorem ipsum dolor sit amet.</p>
			<button class="beansButton">See Menu</button>
		</div>

    </div> <!--/.content -->
	
<!-- 	middle giant pictures-->    
	<div class="twins">
    	<div class="leftTwin">
    		<img src="" alt="">
    	</div>
<!-- right twin start-->    	
 		<div class="rightTwin">
    		<img src="" alt="">
    	</div>
    </div>

    		<?php //get_template_part( 'loop', 'index' );	?>

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>