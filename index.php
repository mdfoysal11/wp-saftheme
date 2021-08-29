
<?php get_header(  );?>
<body <?php body_class(  );?>>
<?php get_template_part( "theme-part/header" )?>
<?php get_template_part( "theme-part/hero" )?>

<div class="container">
    <div class="row my-5">
        <?php if(have_posts(  )) : ?>
            <?php while(have_posts(  )) : the_post(  );?>
            <div class="col-md-3 blog-post">
                <?php
                    the_post_thumbnail( "learg", array("class" => "img-fluid") );
                ?>
                <div class="info-post">
                    <?php echo get_the_date(  );?>
                    <strong class="info-img"><?php echo get_avatar( get_the_author_meta("ID") );?> <?php the_author(  ); ?></strong>
            
                        <?php 
                       $post_format =  get_post_format();
                       if ($post_format == "aside") {
                           echo '<span class="dashicons dashicons-format-aside"></span>';
                       }else if ($post_format == "gallery") {
                           echo '<span class="dashicons dashicons-format-gallery"></span>';
                       }else if ($post_format == "link") {
                           echo '<span class="dashicons dashicons-admin-links"></span>';
                       }else if ($post_format == "image") {
                           echo '<span class="dashicons dashicons-format-image"></span>';
                       }else if ($post_format == "quote") {
                           echo '<span class="dashicons dashicons-format-quote"></span>';
                       }else if ($post_format == "status") {
                           echo '<span class="dashicons dashicons-format-status"></span>';
                       }else if ($post_format == "video") {
                           echo '<span class="dashicons dashicons-format-video"></span>';
                       }else if ($post_format == "audio") {
                           echo '<span class="dashicons dashicons-format-audio"></span>';
                       }else if ($post_format == "chat") {
                           echo '<span class="dashicons dashicons-format-chat"></span>';
                       }

                        ?>
                    
                </div>
            
                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <?php the_excerpt(  );?>
            </div>
            <?php endwhile;?>
        <?php endif;?>
    </div>
</div>
<?php get_template_part( "theme-part/pagination" )?>

<?php get_footer( );?>
