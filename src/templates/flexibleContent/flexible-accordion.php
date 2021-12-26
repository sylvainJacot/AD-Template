<?php if(get_row_layout() == 'flex-accordion') : 
 
 set_query_var( 'fieldName', 'accordion' ); 
 get_template_part('./src/templates/accordions/accordions')

 ?>
 
 <?php endif;?>