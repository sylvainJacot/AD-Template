<div class="flexbile-content">

    <?php if (have_rows('flexible-content')) : while (have_rows('flexible-content')) : the_row(); ?>

    <?php get_template_part('./src/templates/flexibleContent/flexible-wysiwyg');?>
    <?php get_template_part('./src/templates/flexibleContent/flexible-accordion');?>
    <?php get_template_part('./src/templates/flexibleContent/flexible-download-file');?>
    <?php get_template_part('./src/templates/flexibleContent/flexible-image');?>
    <?php get_template_part('./src/templates/flexibleContent/flexible-divider');?>

    <?php endwhile;
    endif; ?>

</div>