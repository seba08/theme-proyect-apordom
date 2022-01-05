<?php
$current = $post->post_name;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;


if($current === "declaraciones-juradas-de-patrimonio"){
    get_template_part('template-parts/cpt/declaraciones-juradas/declaraciones-juradas');
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}
?>