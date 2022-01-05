<?php  get_header(); ?>

<?php
/* if(have_posts()){
    while(have_posts()){
        the_post();
        the_content();
?>
        <div class="page-content">
        <?php
        get_template_part('template-parts/content/content-menu');
        get_template_part('template-parts/content/content-page');
        
        ?>
        </div>
        <?php
    } */
 
    /* get_template_part('partials/base-legal/leyes'); */
?>
    <div class="page-content">
        <?php
        get_template_part('template-parts/content/content-menu');
        get_template_part('template-parts/content/content-page');
        ?>
    </div>
<?php
?>

<?php get_footer(); ?>