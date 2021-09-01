
<?php
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
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
            <?php the_content(); ?>
            </div>
        </div>
    </div>

<?php get_footer( );?>
