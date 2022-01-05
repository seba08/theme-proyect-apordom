<?php
$current = $post->post_title;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;

    if(is_page('proyectos-y-programas')){
        get_template_part('template-parts/cpt/proyectos-programas/proyectos-programas');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }