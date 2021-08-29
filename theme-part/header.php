<div class="header-main">
	<div class="container">
		<div class="row ">
			<div class="col-md-6 header-logo ">
				<?php if (current_theme_supports( "custom-logo" )); ?>
				<?php the_custom_logo(  ); ?>
			</div>
			<div class="col-md-6">
				<div class="menu">
				<?php 
                    wp_nav_menu( array(
                        "location" => "topmenu",
                        "menu_id" => "cumtom_menu_id",
                        "menu_class" => " list-inline text-center ",
                    ) );
                     ?>
					
				</div>
			</div>
		</div>
	</div>
</div>