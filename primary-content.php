<div class="col-md-12">
	<div class="row currentSeasonalWrapper">
        <div class="col-md-2">
			
		</div>
        
		<div class="col-md-4 CurrentSeasonalImg">
			
				<?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-responsive seasonalImage' ) ); ?>
			
		</div>
		
		<div class="col-md-4 currentSeasonal">
			<h3>
                Samuel Adams Seasonal Beers
			</h3>
			<p><?php echo the_excerpt_max_charlength( 140 ) ?></p>
		</div>
        <div class="col-md-2">
			
		</div>
	</div>
</div>