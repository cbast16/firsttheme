<div class="col-md-3 outOfSeasonals>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-responsive' ) ); ?>
    </a>
    
    <p><?php the_content(); ?></p>
</div>