
<?php 
$fieldName = get_query_var('fieldName'); 
$role = get_query_var('role'); 
$icon = get_query_var('icon'); 
$iconPosition = get_query_var('iconPosition'); 
$chooseIcon = get_query_var('chooseIcon');
?>

<?php
/** A COPIER-COLLER POUR UTILISER LES VARIABLES :
set_query_var( 'fieldName', 'test_button' ); 
set_query_var( 'role', 'primary' ); 
set_query_var( 'icon', false ); 
set_query_var( 'chooseIcon', '' ); 
*/
?>




<?php 
    $linkLabel = get_field($fieldName);
    ?>


    <?php if($role === "primary") : ?>
        <p class="button_primary button_icon-<? echo $iconPosition ?>">
        
            <?php if($icon === true) : ?>
                <span class="button_primary-icon"><?php echo file_get_contents( get_template_directory_uri(  ) . '/src/assets/icones/' . $chooseIcon . '.svg' );?></span>
            <?php endif; ?>

            <?php echo $linkLabel; ?>

        </p>
    <?php endif; ?>

    <?php if($role === "secondary") : ?>
        <p class="button_secondary button_icon-<? echo $iconPosition ?>">
        
            <?php if($icon === true) : ?>
                <span class="button_secondary-icon"><?php echo file_get_contents( get_template_directory_uri(  ) . '/src/assets/icones/' . $chooseIcon . '.svg' );?></span>
            <?php endif; ?>

            <?php echo $linkLabel; ?>

        </p>
    <?php endif; ?>

    <?php if($role === "tertiary") : ?>
        <p class="button_tertiary button_icon-<? echo $iconPosition ?>">

            <?php if($icon === true) : ?>
                <span class="button_tertiary-icon"><?php echo file_get_contents( get_template_directory_uri(  ) . '/src/assets/icones/' . $chooseIcon . '.svg' );?></span>
            <?php endif; ?>

            <span class="button_tertiary-underline"><?php echo $linkLabel; ?></span>

        </p>
    <?php endif; ?>