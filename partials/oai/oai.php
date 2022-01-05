<?php
$current = $post->post_name;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;

    if($current === "estructura-organizacional-de-la-oai" && $parent_name === "oficina-de-libre-acceso-a-la-informacion-oai"){
        get_template_part('template-parts/cpt/oai/estructura-organizacional');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "manual-de-organizacion-de-la-oai" && $parent_name === "oficina-de-libre-acceso-a-la-informacion-oai"){
        get_template_part('template-parts/cpt/oai/manual-organizacion');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "manual-de-procedimientos-de-la-oai" || $current === "manual-de-procedimiento-de-la-oai" && $parent_name === "oficina-de-libre-acceso-a-la-informacion-oai"){
        get_template_part('template-parts/cpt/oai/manual-procedimientos');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "estadisticas-y-balances-de-la-oai" || $current === "estadisticas-y-balances-de-la-gestion-oai" && $parent_name === "oficina-de-libre-acceso-a-la-informacion-oai"){
        get_template_part('template-parts/cpt/oai/estadisticas-balances');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "informacion-clasificada" && $parent_name === "oficina-de-libre-acceso-a-la-informacion-oai"){
        get_template_part('template-parts/cpt/oai/informacion-clasificada');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "indice-de-documentos" && $parent_name === "oficina-de-libre-acceso-a-la-informacion-oai"){
        get_template_part('template-parts/cpt/oai/indice-documentos');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "indice-de-transparencia-estandarizado" && $parent_name === "oficina-de-libre-acceso-a-la-informacion-oai"){
        get_template_part('template-parts/cpt/oai/indice-transparencia-estandarizado');
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }