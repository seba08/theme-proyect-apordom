<?php
$current = $post->post_name;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;


if($current === "estadisticas-linea-311" || $current === "estadistica-line-311"){
    echo "Estadisticas Línea 311";
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
}
?>