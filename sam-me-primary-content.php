<div class="col-md-12">
	<div class="row samMeWrapper">
        <div class="col-md-2">
			
		</div>
        
		<div class="col-md-3">
			
				<?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-responsive samMeImage' ) ); ?>
			
		</div>
		
		<div class="col-md-4 currentFavorite">
			<h3>
                My Favorite
			</h3>
			<p><?php echo the_excerpt_max_charlength( 140 ) ?></p>
		</div>
        <div class="col-md-2">
			
		</div>
	</div>
</div>