<?php if(get_row_layout() == 'flex-download') : 

$titre = get_sub_field('label');
$doc = get_sub_field('file');

?>

        <a class="button_primary flex-download" href="<?php echo $doc ?>" download>
        
                <span class="button_primary-icon"><?php echo file_get_contents( get_template_directory_uri(  ) . '/src/assets/icones/arrow.svg' );?></span>


            <?php echo $titre; ?>

        </a>
<? endif ?>