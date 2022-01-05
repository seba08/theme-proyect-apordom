    <div class="sg-content">
        <?php echo custom_breadcrumbs(); ?>
        <?php echo "<h3>$post->post_title</h3>"; ?>
        <div class="breadcrumb">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon is-small">
                            <!-- <i class="fas fa-print" aria-hidden="true"></i> -->
                            <i class="fa fa-print"></i>
                        </span>
                        <span id="imprimir">Imprimir</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon is-small">
                            <!-- <i class="fas fa-envelope-open-text" aria-hidden="true"></i> -->
                            <i class="fa fa-envelope"></i>
                        </span>
                        <span id="correo">Correo</span>
                    </a>
                </li>
                <li>
                    <!-- <span class="icon is-small">
                        <i class="fa fa-language"></i>
                    </span> -->
                    <a href="#" class="translate">Google translate</a>
                </li>
            </ul>
        </div>
  
        <?php
        
        if(have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        }

        get_template_part('partials/base-legal/base-legal');
        get_template_part('partials/marco-legal/marco-legal');
        get_template_part('partials/estructura-organica/organigrama');
        get_template_part('partials/oai/oai');
        get_template_part('partials/plan-estrategico-institucional/plan-estrategico-institucional');
        get_template_part('partials/publicaciones-oficiales/publicaciones-oficiales');
        get_template_part('partials/estadisticas-institucionales/estadisticas-institucionales');
        get_template_part('partials/portal-311/portal-311');
        get_template_part('partials/declaraciones-juradas/declaraciones-juradas');
        get_template_part('partials/presupuesto/presupuesto');
        get_template_part('partials/recursos-humanos/recursos-humanos');
        get_template_part('partials/programas-asistenciales/programas-asistenciales');
        get_template_part('partials/compras/compras');
        get_template_part('partials/proyectos-programas/proyectos-programas');
        get_template_part('partials/finanzas/finanzas');
        get_template_part('partials/datos-abiertos/datos-abiertos');
        get_template_part('partials/comisiones-etica-publica/comisiones-etica-publica');
        get_template_part('partials/consulta-publica/consulta-publica');
        

       ?>
    </div>
<!-- </div> -->