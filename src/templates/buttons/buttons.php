
<?php 
$fieldName = get_query_var('fieldName'); 
$role = get_query_var('role'); 
$icon = get_query_var('icon'); 
$iconPosition = get_query_var('iconPosition'); 
$chooseIcon = get_query_var('chooseIcon');
$options =  get_query_var('options');
?>

<?php
/** A COPIER-COLLER POUR UTILISER LES VARIABLES :
set_query_var( 'fieldName', 'test_button' ); 
set_query_var( 'role', 'primary' ); 
set_query_var( 'icon', false ); 
set_query_var( 'chooseIcon', '' ); 
set_query_var( 'iconPosition', 'left' );
set_query_var( 'options', 'false' ); 
*/
?>

<? if($options == true) :
    

$link = get_field($fieldName, 'options');
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
?>


<?php if($role === "primary") : ?>
    <a  class="button_primary button_icon-<? echo $iconPosition ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
    
        <?php if($icon === true) : ?>
            <span class="button_primary-icon"><?php echo file_get_contents( get_template_directory_uri(  ) . '/src/assets/icones/' . $chooseIcon . '.svg' );?></span>
        <?php endif; ?>

        <?php echo $link_title; ?>

    </a>
<?php endif; ?>

<?php if($role === "secondary") : ?>
    <a class="button_secondary button_icon-<? echo $iconPosition ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
    
        <?php if($icon === true) : ?>
            <span class="button_secondary-icon"><?php echo file_get_contents( get_template_directory_uri(  ) . '/src/assets/icones/' . $chooseIcon . '.svg' );?></span>
        <?php endif; ?>

        <?php echo $link_title; ?>

    </a>
<?php endif; ?>

<?php if($role === "tertiary") : ?>
    <a class="button_tertiary button_icon-<? echo $iconPosition ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">

        <?php if($icon === true) : ?>
            <span class="button_tertiary-icon"><?php echo file_get_contents( get_template_directory_uri(  ) . '/src/assets/icones/' . $chooseIcon . '.svg' );?></span>
        <?php endif; ?>

        <span class="button_tertiary-underline"><?php echo $link_title; ?></span>

    </a>
<?php endif; ?>


<? else : ?>


<?php 
    $link = get_field($fieldName);
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>


    <?php if($role === "primary") : ?>
        <a  class="button_primary button_icon-<? echo $iconPosition ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
        
            <?php if($icon === true) : ?>
                <span class="button_primary-icon"><?php echo file_get_contents( get_template_directory_uri(  ) . '/src/assets/icones/' . $chooseIcon . '.svg' );?></span>
            <?php endif; ?>

            <?php echo $link_title; ?>

        </a>
    <?php endif; ?>

    <?php if($role === "secondary") : ?>
        <a class="button_secondary button_icon-<? echo $iconPosition ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
        
            <?php if($icon === true) : ?>
                <span class="button_secondary-icon"><?php echo file_get_contents( get_template_directory_uri(  ) . '/src/assets/icones/' . $chooseIcon . '.svg' );?></span>
            <?php endif; ?>

            <?php echo $link_title; ?>

        </a>
    <?php endif; ?>

    <?php if($role === "tertiary") : ?>
        <a class="button_tertiary button_icon-<? echo $iconPosition ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">

            <?php if($icon === true) : ?>
                <span class="button_tertiary-icon"><?php echo file_get_contents( get_template_directory_uri(  ) . '/src/assets/icones/' . $chooseIcon . '.svg' );?></span>
            <?php endif; ?>

            <span class="button_tertiary-underline"><?php echo $link_title; ?></span>

        </a>
    <?php endif; ?>
    <?php endif; ?>