<?php 
$svgPath = '/src/assets/icones/';
$iconName = get_query_var('iconName'); 
$spanClass = get_query_var('spanClass'); 
?>

<?php
/** A COPIER-COLLER POUR UTILISER LES VARIABLES :
set_query_var( 'iconName', 'iconName' ); 
set_query_var( 'spanClass', 'spanClass' ); 
*/
?>


<a class="scrolldown" href="#anchor">

    <span class="<? echo $spanClass; ?>"><?php echo file_get_contents( get_stylesheet_directory_uri() . $svgPath . $iconName . '.svg');?></span>

</a>

