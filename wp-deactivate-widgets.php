<?php 
 
 
// add action 
add_action('after_setup_theme', 'gm_remove_theme_default_widgets' );

/**
* function to check if the widgets are already removed by checking options variable
*
* If the options variable isn't already set assign empty array to `sidebars_widgets` 
* i.e. storing active widgets
*/

function acme_remove_default_widgets() {
 
  if ( ! get_option( 'gm_cleared_widgets' ) ) {
 
    update_option( 'sidebars_widgets', array() );
    update_option( 'gm_cleared_widgets', true );
 
  }
 
}











?>
