<?php
$current = $post->post_name;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;


if($current === "nomina"  && $parent_name === "recursos-humanos" || $parent_name === "recurso-humano" || $parent_name === "recursos-humano" || $parent_name === "recurso-humanos"){
    echo "Nómina";
    echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
}

if($current === "portal-concursa-vacantes" && $parent_name === "recursos-humanos" || $parent_name === "recurso-humano" || $parent_name === "recursos-humano" || $parent_name === "recurso-humanos"){
    echo "Portal Concursa - Vacantes";
    echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
}

if($current === "jubilaciones-pensiones-y-retiros" && $parent_name === "recursos-humanos" || $parent_name === "recurso-humano" || $parent_name === "recursos-humano" || $parent_name === "recurso-humanos"){
    echo "Jubilaciones, pensiones y retiros";
    echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
}
?>