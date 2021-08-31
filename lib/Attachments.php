<?php
define( 'ATTACHMENTS_SETTINGS_SCREEN', false ); // disable the Settings screen
add_filter( 'attachments_default_instance', '__return_false' ); // disable the default instance
function saf_lib($attachments){

    $fields = array(
        array(
        'name'      => 'title', 
        'type'      => 'text',
        'label'     => __( 'Slider Title', 'saf' ),
        ),
    );
 $args = array(
        'label'         => 'Slider Image',
        'post_type'     => array( 'post' ),
        'filetype'      => array('image'),
        'note'          => 'hmm dynamic!',
        'button_text'   => __( 'try it', 'saf' ),
        'modal_text'    => __( 'Attach', 'saf' ),
        'fields'        => $fields,
    
      );
      $attachments->register( 'slider', $args );


}
add_action( "attachments_register","saf_lib" );