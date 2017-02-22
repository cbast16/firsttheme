<?php /* Template Name: Sam and Me Template */ ?>
<?php get_header(); ?>
    <div class="template-description samMeTitle">
        <h2>Sam and Me</h2>
        <h4>
        This is a page where you can upload images to show your favorite Sam Adams moments.</h4>
        
    </div>
	<div class="row samMeMain">
            <?php 
            $i = 0;
			query_posts('category_name=samMeMain'); while ( have_posts() && $i < 1) : the_post();
                    // use big template part (primary-content.php)
                    get_template_part( 'sam-me-primary-content', get_post_format() );

            $i++;
			endwhile;  
			?>
</div>
<hr>

<div class="row samMeSub">
			<?php 
            $i = 0;
			query_posts('category_name=samMeSub'); while ( have_posts() && $i < 4) : the_post();
				    get_template_part( 'sam-me-grid-content', get_post_format() );
                $i++;
			endwhile;  
			?>
</div>
		 <!-- /.blog-main -->

<?php get_footer(); ?>