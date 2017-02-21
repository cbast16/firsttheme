<?php /* Template Name: Seasonal Template */ ?>
<?php get_header(); ?>
    <div class="template-description">
        <h2>Great Content</h2>
        <h5>This is the default template.</h5>
    </div>
	<div class="row">
            <?php 
            $i = 0;
			query_posts('category_name=primary'); while ( have_posts() && $i < 1) : the_post();
                    // use big template part (primary-content.php)
                    get_template_part( 'primary-content', get_post_format() );

            $i++;
			endwhile;  
			?>
</div>
<div class="row">
			<?php 
            $i = 0;
			query_posts('category_name=seasonal'); while ( have_posts() && $i < 4) : the_post();
				    get_template_part( 'grid-content', get_post_format() );
                $i++;
			endwhile;  
			?>
</div>
		 <!-- /.blog-main -->
	</div> <!-- /.row -->
<?php get_footer(); ?>