<?php get_header(); ?>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Update</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Aenan convallis.
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      View Updates
    </a>
  </div>
</div>

<div class="row">

        <div class="col-sm-8 blog-main">
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            
                get_template_part( 'content', get_post_format() ); 
            
            
            endwhile; endif;
            ?>
        </div><!-- /.blog-main -->

        <?php get_sidebar(); ?>

</div><!-- /.row -->

<?php get_footer(); ?>