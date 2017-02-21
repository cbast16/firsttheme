<?php get_header(); ?>
    <div class="template-description">
        <h2>Index Template</h2>
        <h5>This is the default template.</h5>
    </div>
	<div class="row">
		<div class="col-sm-8">

			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
			?>

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>