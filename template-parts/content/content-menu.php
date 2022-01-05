<div class="sg-nav-menu">
            <div class="nav-menu">
                <h4 class="menu-title">Menú Principal</h4>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'menu_class'      => 'menu-wrapper',
                            'container_class' => 'primary-menu-container',
                            'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
                            'fallback_cb'     => false,
                        )
                    );
                ?>
            </div>
</div>