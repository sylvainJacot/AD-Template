<?php

/**
 * Header file
 * 
 * 
 */
?>
<?php


$current_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$meta_description = get_field('meta_description', get_queried_object_id());
if (empty($meta_description)) {
	$meta_description = 'This could be an interesting meta description';
}
?>
<!DOCTYPE html>
<!--  language_attributes() : Builds up a set of HTML attributes containing the text direction and language information for the page. -->
<html <?php language_attributes() ?> dir="ltr">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
	<meta charset="utf-8">
    <?php if (is_home()) : ?>
        <title>Blog | <?php bloginfo('name'); ?></title>
    <?php elseif (is_404()) : ?>
        <title>Error 404 | <?php bloginfo('name'); ?></title>
    <?php else : ?>
        <title>
			<?php if (get_field('meta_titre')) : the_field('meta_titre') ?> | <?php bloginfo('name');
            else : the_title(); ?> | <?php bloginfo('name');
            endif; ?>
		</title>
    <?php endif; ?>

	<meta name="description" content="<?php echo $meta_description; ?> " />
    

    <?php wp_head() ?>
</head>

<!-- Hey, source code investigator! 
	This website is created by
		
	         _       _ _             _____            _             
	    /\  | |     | (_)           |  __ \          (_)            
	   /  \ | |_ ___| |_  ___ _ __  | |  | | ___  ___ _  __ _ _ __  
	  / /\ \| __/ _ \ | |/ _ \ '__| | |  | |/ _ \/ __| |/ _` | '_ \ 
	 / ____ \ ||  __/ | |  __/ |    | |__| |  __/\__ \ | (_| | | | |
	/_/    \_\__\___|_|_|\___|_|    |_____/ \___||___/_|\__, |_| |_|
	                                                     __/ |      
                                                        |___/   
	Go pay them a visit on
	https://www.atelierdesign.be
	info@atelierdesign.be
	-->

<body <?php body_class(''); ?>>