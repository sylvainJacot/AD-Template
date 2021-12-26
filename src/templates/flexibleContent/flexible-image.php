<?php if(get_row_layout() == 'flex-image') : 

 
$image = get_sub_field('image');

    if( !empty( $image ) ): ?>
    <img class="flex-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

<?php endif;?>