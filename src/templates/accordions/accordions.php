<?php 
$fieldName = get_query_var('fieldName'); 
?>

<?php
/** A COPIER-COLLER POUR UTILISER LES VARIABLES :
set_query_var( 'fieldName', 'fieldName' ); 
*/
?>

<?php if( have_rows($fieldName) ): ?>

<?php while( have_rows($fieldName) ): the_row(); ?>

    <div class="accordion">
        <div class="accordion_tab">
        <p class="accordion_tab-title"><?php the_sub_field('titre'); ?></p>
        <?php 
            set_query_var( 'type', 'default' ); 
            set_query_var( 'wp', false ); 
            set_query_var( 'iconName', 'arrow' ); 
            get_template_part('./src/templates/buttons/button_floating_action');
        ?>
        </div>
        <div class="accordion_content"><p class="accordion_content-paragraph"><?php the_sub_field('contenu'); ?></p></div>
    </div>
<?php endwhile; ?>

<?php endif; ?>