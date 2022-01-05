<?php
$current = $post->post_name;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$parent_name = $grandparent_get->post_name;

    if($current === "planificacion-estrategica-institucional" && "plan-estrategico-institucional-pei" === $parent_name){
        get_template_part('template-parts/cpt/plan-estrategico-institucional/planificacion-estrategica-institucional');

        echo "Planificación estratégica institucional";
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "plan-operativo-anual-poa" && $parent_name === "plan-estrategico-institucional-pei"){
        get_template_part('template-parts/cpt/plan-estrategico-institucional/plan-operativo-anual');

        echo "Plan operativo anual";
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "memorias-institucionales" && $parent_name === "plan-estrategico-institucional-pei"){
        get_template_part('template-parts/cpt/plan-estrategico-institucional/memorias-institucionales');

        echo "Memorias Institucionales";
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }


    /* ===== Dentro de Plan Operativo Anual (POA) ===== */
    if($current === "informes-trimestrales-de-poa" || $current === "informes-trimestrales-poa" && $parent_name === "plan-operativo-anual-poa" || $parent_name === "plan-operativo-anual"){
        get_template_part('template-parts/cpt/plan-estrategico-institucional/plan-operativo-anual/informes-trimestrales-poa');

        echo "Memorias Institucionales";
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }

    if($current === "informes-semestrales-de-poa-historico" || $current === "informes-semestrales-poa-historico" && $parent_name === "plan-operativo-anual-poa" || $parent_name === "plan-operativo-anual"){
        get_template_part('template-parts/cpt/plan-estrategico-institucional/plan-operativo-anual/informes-semestrales-poa');

        echo "Memorias Institucionales";
        echo $current;
        echo "<br>";
        echo $parent_name;
        echo "<br>";
        echo $post->ID;
    }
    /* ===== Fin elementos dentro de PLAN OPERATIVO ANUAL POA======== */
