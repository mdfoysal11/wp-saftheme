<div class="container">
    <div class="row">
        <div class="col-md-6">
             <?php
             
             if(is_active_sidebar( "footer-1" )){
                 dynamic_sidebar( "footer-1" );
             }
             ?>
        </div>
        <div class="col-md-6">
            <?php
            if(is_active_sidebar( "footer-2" )){
                dynamic_sidebar( "footer-2" );
            }
            
            ?>
        </div>
    </div>
</div>


<?php wp_footer();?>
</body>
</html>