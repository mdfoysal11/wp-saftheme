<div class="main-post">

<?php 

if(have_posts(  )){
    while(have_posts(  )){
        the_post(  );?>
        
        <div class="blog-post">
        <div class="row">
            <div class="col-md-3 kaz-hobe">
            <?php the_post_thumbnail("learge", array("class" => "img-fluid")); ?>
            <div class="row">
                <div class="col-md-6">
                <?php echo get_the_date("jS M, Y");?>
                </div>
                <div class="col-md-6 post-image">
                <?php echo get_avatar( get_the_author_meta("ID") );?> <?php the_author(  ); ?>
                </div>
                
                <h2 class="post-title"><a href="<?php the_permalink( ) ?>"><?php the_title( );?></a></h2>
                <div class="blog-content">
                        <?php the_excerpt(  ); ?>
                </div>
            </div>
            </div>
        </div>
    </div>
        
        <?php
    }
}

?>
</div>