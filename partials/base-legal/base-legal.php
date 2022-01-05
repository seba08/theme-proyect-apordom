<?php
$current = $post->post_name;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;
       
    if($current === "constitucion-de-la-republica-dominicana" && "base-legal-de-la-institucion" === $parent_name){
        get_template_part('template-parts/cpt/base-legal/constitucion');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "leyes" && "base-legal-de-la-institucion" === $parent_name){
        get_template_part('template-parts/cpt/base-legal/leyes');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "decretos" && "base-legal-de-la-institucion" === $parent_name){
        get_template_part('template-parts/cpt/base-legal/decretos');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "resoluciones" && "base-legal-de-la-institucion" === $parent_name){
        get_template_part('template-parts/cpt/base-legal/resoluciones');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "normativas" && "base-legal-de-la-institucion" === $parent_name){
        get_template_part('template-parts/cpt/base-legal/normativas');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }
