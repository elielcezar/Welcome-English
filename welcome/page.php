<?php get_header(); ?>

<div id="masthead">
  <div class="container">    
    <h1><?php the_title(); ?></h1> 
  </div>
</div>

<div id="principal">

    <div class="container">
        <div class="conteudo">
            <?php the_content(); ?>
        </div>
        <div class="sidebar">
            <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar' ); ?>
            <?php endif; ?>  
        </div> 
    </div>
  
</div>


<?php get_footer(); ?>
