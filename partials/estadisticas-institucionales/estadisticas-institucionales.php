<?php
$current = $post->post_name;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;


if($current === "estadisticas-institucionales" || $current === "estadistica-institucional" || $current === "estadistica-institucionales" || $current === "estadisticas-institucionale"){
    echo "Estadísticas Institucionales";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}

/*  ================================================== */
/*  ***********************2022*********************** */
/*  ================================================== */


/* Estadísticas enero-abril 2022 */
if($current === "enero-abril" && "estadistica-2022" === $parent_name){
    get_template_part('template-parts/estadisticas-institucionales/2022/enero-abril');
    echo "Enero-Abril";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}

/* Estadísticas mayo-junio 2022 */
if($current === "mayo-junio" && "estadistica-2022" === $parent_name){
    get_template_part('template-parts/estadisticas-institucionales/2022/mayo-junio');
    echo "Mayo-Junio";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}

/* Estadísticas julio-septiembre 2022 */
if($current === "julio-septiembre" && "estadistica-2022" === $parent_name){
    get_template_part('template-parts/estadisticas-institucionales/2022/julio-septiembre');
    echo "Julio-Septeimbre";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}

/* Estadísticas octubre-diciembre 2022 */
if($current === "octubre-diciembre" && "estadistica-2022" === $parent_name){
    get_template_part('template-parts/estadisticas-institucionales/2022/octubre-diciembre');
    echo "Octubre-Diciembre";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}

/* Fin Estadísticas 2022 */


/*  ================================================== */
/*  ***********************2021*********************** */
/*  ================================================== */


/* Estadísticas enero-abril 2021 */
if($current === "enero-abril" && "estadistica-2021" === $parent_name){
    get_template_part('template-parts/estadisticas-institucionales/2021/enero-abril');
    echo "Enero-Abril";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}

/* Estadísticas mayo-junio 2021 */
if($current === "mayo-junio" && "estadistica-2021" === $parent_name){
    get_template_part('template-parts/estadisticas-institucionales/2021/mayo-junio');
    echo "Mayo-Junio";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}

/* Estadísticas julio-septiembre 2021 */
if($current === "julio-septiembre" && "estadistica-2021" === $parent_name){
    get_template_part('template-parts/estadisticas-institucionales/2021/julio-septiembre');
    echo "Julio-Septeimbre";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}

/* Estadísticas octubre-diciembre 2021 */
if($current === "octubre-diciembre" && "estadistica-2021" === $parent_name){
    get_template_part('template-parts/estadisticas-institucionales/2021/octubre-diciembre');
    echo "Octubre-Diciembre";
    echo "<br>";
    echo $current;
    echo "<br>";
    echo $parent_name;
    echo "<br>";
    echo $post->ID;
}

/* Fin Estadísticas 2021 */

?>