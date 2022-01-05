<?php
$current = $post->post_name;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;
       
    if($current === "estados-financieros" && "finanzas" === $parent_name){
        echo "Estados Financieros";
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "informes-financieros" && "finanzas" === $parent_name){
        echo "Estados Financieros";
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "ingresos-y-egresos" || $current === "relacion-de-ingresos-y-egresos" && "finanzas" === $parent_name){
        echo "Estados Financieros";
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "informes-de-auditorias" && "finanzas" === $parent_name){
        echo "Estados Financieros";
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "activos-fijos" && "finanzas" === $parent_name){
        echo "Estados Financieros";
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "inventario-en-almacen" && "finanzas" === $parent_name){
        echo "Estados Financieros";
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

