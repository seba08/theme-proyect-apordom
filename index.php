<?php
get_header();
if(have_posts()){
    while(have_posts()){
        the_post();
        the_content();
        get_template_part('template-parts/content/content-index');
        
    }
}
get_footer();