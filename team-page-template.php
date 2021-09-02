<?php
/**
 * Template Name: About Us Template
 */
the_post(  );
get_header(  );
?>
<body <?php body_class(  );?>>
<?php get_template_part( "theme-part/navigation" )?>

    <div class="page_wapper">
            <div class="page-header">
               <h2><?php the_title();?></h2>
            </div>
    </div>
<?php if(class_exists("Attachments")): ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php 
                        $attachments = new Attachments("testimonials");
                        if($attachments->exist()){
                            while($attachment = $attachments->get()){
                                ?>
                                    <div class="testimonial">
                                        <?php echo $attachments->image("thumbnail"); ?>
                                        <h4><?php echo $attachments->field("name"); ?></h4>
                                        <p><?php echo $attachments->field("details"); ?></p>
                                    </div>
                                <?php
                            }
                        }
                    ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php get_footer( );?>

