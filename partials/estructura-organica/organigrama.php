<?php
$current = $post->post_title;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;

    if(is_page('estructura-organica') || is_page('estructura-organica-de-la-institucion') || is_page('estructura-organica-institucional')){
        get_template_part('template-parts/cpt/estructura-organica/organigrama');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }