<?php
$current = $post->post_name;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;


if($current === "presupuesto"){
    echo "Presupuesto";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}

if($current === "presupuesto-aprobado-del-ano" && "presupuesto" === $parent_name){
    get_template_part('template-parts/presupuesto/presupuesto-aprobado-del-ano/2021/presupuesto-aprobado-2021');
    echo "Presupuesto";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}

if($current === "ejecucion-del-presupuesto-ano-2021" && "ejecucion-de-presupuesto" === $parent_name){
    get_template_part('template-parts/presupuesto/ejecucion-presupuesto/2021/ejecucion-presupuesto-2021');
    echo "Presupuesto";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}
?>