<?php

///////// Styles and Scripts
function ad_scripts() {
    // Styles
    // CDNS

    // Styles
    wp_enqueue_style( "main-style", get_template_directory_uri(  ) . "/dist/style.css" );

    
    // Scripts
    // CDNS


    // Scripts
    wp_enqueue_script( "app-script", get_template_directory_uri(  ) . "/dist/app.js", rand(100000,200000), true);
//     wp_enqueue_script( "buttonfloating-script", get_template_directory_uri(  ) . "/src/js/components/button_floating_action-dist.js", rand(100000,200000), true);
//     wp_enqueue_script( "accordion-script", get_template_directory_uri(  ) . "/src/js/components/accordion-dist.js", rand(100000,200000), true);
//     wp_enqueue_script( "addclass-script", get_template_directory_uri(  ) . "/src/js/components/add-class-dist.js", rand(100000,200000), true);
//     wp_enqueue_script( "addspan-script", get_template_directory_uri(  ) . "/src/js/components/add-span-dist.js", rand(100000,200000), true);
//     wp_enqueue_script( "changetabname-script", get_template_directory_uri(  ) . "/src/js/components/change-tab-name.js", rand(100000,200000), true);
    

//     if ( is_page_template( 'home-template.php' ) ) {
//       wp_enqueue_script( "videoclip-script", get_template_directory_uri(  ) . "/src/js/components/video-clip.js", '', '', true);
//   }
}
add_action( 'wp_enqueue_scripts', 'ad_scripts');



function add_defer_attribute($tag, $handle) {
    // add script handles to the array below
    $scripts_to_defer = array('');
    
    foreach($scripts_to_defer as $defer_script) {
       if ($defer_script === $handle) {
          return str_replace(' src', ' defer="defer" src', $tag);
       }
    }
    return $tag;
 }

 add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);