<?php  get_header(); ?>
<?php
    get_template_part('template-parts/content/content-frontpage');
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_content();
        }
    }
?>

<?php get_footer(); ?>