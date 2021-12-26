<?php 
$date = get_query_var('date'); 
$paragraph = get_query_var('paragraph'); 
$button = get_query_var('button'); 
$chip = get_query_var('chip');
$chipPos = get_query_var('chipPos')
?>


<?php
/** COPIER-COLLER POUR UTILISER LES VARIABLES :
set_query_var( 'date', true ); 
set_query_var( 'paragraph', true ); 
set_query_var( 'button', true ); 
set_query_var( 'chip', true ); 
set_query_var( 'chipPos', '' ); 
*/
?>

<a class="card" href="<?php the_permalink();?>">
    <div class="card_picture-container">

    <?php if($chip === true) : ?>
    <div class="card_chip card_chip-<?php echo $chipPos; ?>">Test</div>
    <?php endif; ?>

    <img class="card_picture" alt="picture" src="<?php echo get_template_directory_uri(  );?>/pic.png"/>
    </div>
    <div class="card_content">
            
            <?php if($date === true) : ?>
            <p class="card_content-date">dd/mm/yy</p>
            <?php endif; ?>

            <h3 class="card_content-title"><?php the_title();?></h3>
            
            <?php if($paragraph === true) : ?>
            <p class="card_content-paragraph">Nor is there anyone who loves or pursues or desires to obtain pain of itself, max 3 lines...</p>
            <?php endif; ?>

            <?php if($button === true) : ?>
                <p class="button_secondary">Bouton</p>
            <?php endif; ?>

    </div>
</a> 