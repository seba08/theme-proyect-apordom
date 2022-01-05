<?php
$current = $post->post_name;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;

    if($current === "leyes" && "marco-legal-del-sistema-de-transparencia" === $parent_name){
        get_template_part('template-parts/cpt/marco-legal/leyes');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "decretos" && "marco-legal-del-sistema-de-transparencia" === $parent_name){
        get_template_part('template-parts/cpt/marco-legal/decretos');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "reglamentos-y-resoluciones" && "marco-legal-del-sistema-de-transparencia" === $parent_name){
        get_template_part('template-parts/cpt/marco-legal/reglamentos-resoluciones');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "normativas" && "marco-legal-del-sistema-de-transparencia" === $parent_name){
        get_template_part('template-parts/cpt/marco-legal/normativas');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }