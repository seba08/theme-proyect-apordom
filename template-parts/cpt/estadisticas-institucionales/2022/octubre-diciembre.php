<?php
    switch_to_blog(2);
        /* echo $elements_number; */
        $args = array(
            'post_type' => 'estadisticas',
            'posts_per_page'=> -1,
            'tax_query' => array( 
                'relation' => 'OR',
                array(
                    'taxonomy' => 'estadisticas',
                    'field' => 'slug',
                    'terms' => array('octubre-diciembre'),
                    'operator' => 'IN',
                ),

                array(
                    'taxonomy' => 'estadisticas',
                    'field' => 'slug',
                    'terms' => array('octubre-y-diciembre'),
                    'operator' => 'IN',
                ),
            ),
            'meta_key' => 'orden',
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'meta_query' => array(
                array(
                    'key' => 'ano',
                    'value' => 2022,
                    'type' => 'numeric',
                    'compare' => '=',
                ),
            ),
        );
        
        $query = new WP_Query($args);
        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post();
                ?>
                <div class="content-file">
                    <div class="box">
                        <div class="box-icon">
                            <img src="<?php echo $post->icono ?>" alt="icon">
                        </div>
                        <div class="box-content">
                            <p><?php echo $post->nombre ?></p>
                        </div>
                        <div class="box-detail">
                            <div class="detail">
                                <i class="fa fa-info"></i>
                            </div>
                            <div class="detail-data">
                                <p>Tipo de archivo: <span><?php echo $post->tipo_de_archivo ?></span></p>
                                <p>Tamaño: <span><?php echo $post->tamano ?></span></p>
                                <p>Fecha: <span><?php echo date("d/m/y"); ?></span></p>
                                <p><a href="<?php echo $post->url ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg></a></p>
                            </div>
                        </div>
                        <div class="box-download">
                            <button class="btn-download">
                                <a href="<?php echo $post->url ?>" download>Descargar</a>
                            </button>
                        </div>
                    </div>
                </div>
                
                <?php
                
            }
        }
        wp_reset_query();

        ?>
        <div class="paginacion">
            <?php 
                /* echo paginate_links( array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $query->max_num_pages,
                    'current'      => max( 1, get_query_var( 'paged' ) ),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'plain',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( '<i></i> %1$s', __( '<', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i></i>', __( '>', 'text-domain' ) ),
                    'add_args'     => false,
                    'add_fragment' => '',
                ) ); */
            ?>
        </div>
        <?php
    
?>