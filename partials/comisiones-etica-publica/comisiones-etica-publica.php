<?php
$current = $post->post_name;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;


if($current === "comisiones-de-etica-publica-cep" || $current === "comisiones-de-eticas-publicas-cep" || $current === "comision-de-etica-publica-cep"){
    echo "Comisión de Ética Pública";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}
?>