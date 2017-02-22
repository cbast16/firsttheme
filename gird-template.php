<?php /* Template Name: Beer Template */ ?>
<?php get_header(); ?>
    <div class="template-description">
        
        
    </div>
	<div class="row">
		

			<?php 
            $i = 0;
			query_posts('category_name=beer'); while ( have_posts() && $i < 3) : the_post();
				get_template_part( 'grid-content', get_post_format() );
            $i++;
			endwhile;  
			?>

		 <!-- /.blog-main -->
	</div> <!-- /.row -->
<?php get_footer(); ?>