<?php
$current = $post->post_name;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;


if($current === "plan-anual-de-compras-y-contrataciones" && $parent_name === "compras-y-contrataciones-publicas" || $parent_name === "compra-y-contrataciones-publicas" || $parent_name === "compras-y-contratacione-publicas" || $parent_name === "compras-y-contrataciones-publica"){
    echo "Plan Anual de Compras y Contrataciones";
}

if($current === "licitaciones-publicas-nacionales-e-internacionales" && $parent_name === "compras-y-contrataciones-publicas" || $parent_name === "compra-y-contrataciones-publicas" || $parent_name === "compras-y-contratacione-publicas" || $parent_name === "compras-y-contrataciones-publica"){
    echo "Licitaciones Públicas Nacionales e Internacionales";
}

if($current === "licitaciones-restringidas" && $parent_name === "compras-y-contrataciones-publicas" || $parent_name === "compra-y-contrataciones-publicas" || $parent_name === "compras-y-contratacione-publicas" || $parent_name === "compras-y-contrataciones-publica"){
    echo "Licitaciones Restringidas";
}

if($current === "sorteos-de-obras" && $parent_name === "compras-y-contrataciones-publicas" || $parent_name === "compra-y-contrataciones-publicas" || $parent_name === "compras-y-contratacione-publicas" || $parent_name === "compras-y-contrataciones-publica"){
    echo "Sorteos de Obras";
}

if($current === "comparaciones-de-precios" && $parent_name === "compras-y-contrataciones-publicas" || $parent_name === "compra-y-contrataciones-publicas" || $parent_name === "compras-y-contratacione-publicas" || $parent_name === "compras-y-contrataciones-publica"){
    echo "Comparaciones de Precios";
}

if($current === "compras-menores" && $parent_name === "compras-y-contrataciones-publicas" || $parent_name === "compra-y-contrataciones-publicas" || $parent_name === "compras-y-contratacione-publicas" || $parent_name === "compras-y-contrataciones-publica"){
    echo "Compras Menores";
}

if($current === "subasta-inversa" && $parent_name === "compras-y-contrataciones-publicas" || $parent_name === "compra-y-contrataciones-publicas" || $parent_name === "compras-y-contratacione-publicas" || $parent_name === "compras-y-contrataciones-publica"){
    echo "Subasta Inversa";
}

if($current === "relacion-de-compras-por-debajo-del-umbral" && $parent_name === "compras-y-contrataciones-publicas" || $parent_name === "compra-y-contrataciones-publicas" || $parent_name === "compras-y-contratacione-publicas" || $parent_name === "compras-y-contrataciones-publica"){
    echo "Relación de compras por debajo del umbral";
}

if($current === "micro-pequenas-y-medianas-empresas" && $parent_name === "compras-y-contrataciones-publicas" || $parent_name === "compra-y-contrataciones-publicas" || $parent_name === "compras-y-contratacione-publicas" || $parent_name === "compras-y-contrataciones-publica"){
    echo "Micro, pequeñas y medianas empresas";
}

if($current === "emergencia-nacional" && $parent_name === "compras-y-contrataciones-publicas" || $parent_name === "compra-y-contrataciones-publicas" || $parent_name === "compras-y-contratacione-publicas" || $parent_name === "compras-y-contrataciones-publica"){
    echo "Emergancia Nacional";
}

if($current === "casos-de-urgencia" && $parent_name === "compras-y-contrataciones-publicas" || $parent_name === "compra-y-contrataciones-publicas" || $parent_name === "compras-y-contratacione-publicas" || $parent_name === "compras-y-contrataciones-publica"){
    echo "Casos de Urgencia";
}

if($current === "otros-casos-de-excepcion" && $parent_name === "compras-y-contrataciones-publicas" || $parent_name === "compra-y-contrataciones-publicas" || $parent_name === "compras-y-contratacione-publicas" || $parent_name === "compras-y-contrataciones-publica"){
    echo "Otros Casos de Excepción";
}

if($current === "relacion-de-estado-de-cuentas-de-suplidores" && $parent_name === "compras-y-contrataciones-publicas" || $parent_name === "compra-y-contrataciones-publicas" || $parent_name === "compras-y-contratacione-publicas" || $parent_name === "compras-y-contrataciones-publica"){
    echo "Relación de Estados de Cuentas de Suplidores";
}
?>