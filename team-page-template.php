<?php
/**
 * Template Name: Team
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
<?php if( have_rows('member') ): ?>
    <div class="container">
        <div class="row my-5">
            <?php while(have_rows("member")): the_row();
                $member_image = get_sub_field("image");
                $member_name = get_sub_field("name");
                $member_position = get_sub_field("position");
                $member_bio = get_sub_field("bio");
                $member_email = get_sub_field("email");
                ?>
            <div class="col-md-4">
                <div class="team_member">
                    <?php echo wp_get_attachment_image($member_image, 'team-member'); ?>
                    <h4><?php echo $member_name; ?></h4>
                    <strong><?php echo $member_position; ?></strong>
                    <p><?php echo $member_bio; ?></p>
                    <p><?php echo $member_email; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer( );?>

