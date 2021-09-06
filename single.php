
<?php 

$saf_layout_class = "col-md-8";
if (! is_active_sidebar("sidebar-1")) {

  $saf_layout_class = "col-md-12";
}

?>


<?php get_header(  );?>

<body <?php body_class(  );?>>
<?php get_template_part( "theme-part/navigation" )?>

<div class="container">
    <div class="row">
        <div class="<?php echo $saf_layout_class; ?>">
        <strong class="info-img"><?php echo get_avatar( get_the_author_meta("ID") );?> <?php the_author(  ); ?></strong><br>
            <p><?php echo get_the_date("jS M, Y");?></p>
            <h2 class="post-title"><?php the_title( );?></a></h2>
            <div class="foysal">
                             <?php 
                                        if(class_exists('Attachments')){
                                            $attachments = new Attachments('slider');
                                            if($attachments->exist()){
                                                while($attachment = $attachments->get()){?>
                                                <div>
                                                    <?php echo $attachments->image('large'); ?>
                                                    <?php echo $attachments->field('title'); ?>
                                                </div>
                                                <?php

                                                }
                                            }
                                        }
                                        ?>


                    </div>
<?php if(!class_exists('Attachments')) : ?>
            <?php the_post_thumbnail("learg", array("class" => "img-fluid")); ?>
            <?php endif; ?>
            <?php the_content(  ); ?>
            <?php 
                if(has_post_format( "image") && "the_field"){
                    $saf_camera_model = get_field("camera_model");
                    $saf_location = get_field("location");
                    $saf_licences = get_field("licences");
                    $saf_licences_details = get_field("licences_details");
                    ?>
                        <strong>Camera Model: <?php echo $saf_camera_model; ?></strong><br/>
                        <strong>Location: <?php echo $saf_location; ?></strong><br/>
                        <?php if($saf_licences): ?>
                        <strong>Licences: <?php echo $saf_licences_details; ?></strong><br/>
                        <?php
                        else:
                            ?>
                            <strong>Licences: Free </strong><br/>
                            <?php

                         endif; 
                         ?>
                    <?php
                }
            ?>
            <div class="post-pag-wrap">
                <div class="post-pag-container-prev">
                <?php previous_post_link('<span>Previous</span><h3>%link</h3>', '%title', false);?>
                </div>
                <div class="post-pag-container-next">
                <?php next_post_link('<span>Next</span><h3>%link</h3>', '%title', false);?>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
        <?php
           if (is_active_sidebar("sidebar-1")) {
               dynamic_sidebar("sidebar-1");
           }

           ?>
         </div>
    </div>
</div>


<?php get_footer( );?>
