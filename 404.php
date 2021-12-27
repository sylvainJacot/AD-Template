<?php
get_header();
?>



<section class="errorpage-section">
<div class="errorpage-section-wrapper">
    <p class="errorpage-subtitle gsap-title-reveal"><? the_field('errorpage_subtitle', 'options')?></p>
    
    <h1 class="errorpage-title">
    <?
            $maintitle = get_field('errorpage_title', 'options'); 
            $openmainttitle = str_replace('[color]','<span>', $maintitle); 
            $closemainttitle = str_replace('[/color]','</span>', $openmainttitle); 
            echo $closemainttitle; 
            ?></h1>
    <p class="errorpage-text"><? the_field('errorpage_text', 'options')?></p>
    <?php 
    $link = get_field('errorpage_button', 'options');
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="button_primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
        <?php echo $link_title; ?>

    </a>
</div>
</section>


<?php get_footer(); ?>