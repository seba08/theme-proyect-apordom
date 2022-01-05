<?php
$current = $post->post_name;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;


if($current === "publicaciones-oficiales"){
    echo "Publicaciones Oficiales";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}

if($current === "2021-2" && "publicaciones-oficiales" === $parent_name){
    get_template_part('template-parts/cpt/publicaciones-oficiales/2021/publicaciones-oficiales-2021');
    echo "Publicaciones Oficiales - 2021-2";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}

if($current === "2020-2" && "publicaciones-oficiales" === $parent_name){
    get_template_part('template-parts/cpt/publicaciones-oficiales/2020/publicaciones-oficiales-2020');
    echo "Publicaciones Oficiales - 2020-2";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}
?>