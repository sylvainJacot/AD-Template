<?php 
$formId = get_query_var('formId'); 
?>

<?php
/** A COPIER-COLLER POUR UTILISER LES VARIABLES :
set_query_var( 'formId', '0' ); 
*/
?>

<?php echo FrmFormsController::get_form_shortcode(array('id' => $formId, 'title' => false, 'description' => false)); ?>