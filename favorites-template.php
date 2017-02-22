<?php /* Template Name: Favorites Template */ ?>
<?php get_header(); ?>
    <div class="template-description">
        <h2>Sam Adams Seasonals</h2>
        
    </div>
	<div class="row">
            <?php 
            $i = 0;
			query_posts('category_name=favoritePrimary'); while ( have_posts() && $i < 1) : the_post();
                    // use big template part (primary-content.php)
                    get_template_part( 'favorites-primary-content', get_post_format() );

            $i++;
			endwhile;  
			?>
</div>
<div class="row">
			<?php 
            $i = 0;
			query_posts('category_name=favoriteSub'); while ( have_posts() && $i < 4) : the_post();
				    get_template_part( 'favorites-grid-content', get_post_format() );
                $i++;
			endwhile;  
			?>
</div>
		 <!-- /.blog-main -->

<?php get_footer(); ?>