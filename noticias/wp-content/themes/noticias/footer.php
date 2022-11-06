<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Noticias
 * @since Noticias 1.0
 */

$idioma = $_GET['lang']; ?>

	<!--</div><!-- .site-content -->
                </div>
                    <div id="sidebar" class="sidebar">
                        <?php get_sidebar(); ?>
                    </div><!-- .sidebar -->
                    <div class="clear"></div>
                </div>

            <?php if($idioma == 'es' || $idioma == '') { ?>
                <div class="contenido_contacto_index">
                    <div class="contenido_variable">
                        <div class="apartado_contacto_index">
                            <div class="titulo_apartado_contacto">
                                <h3>CONTACTO</h3>
                            </div>
                            <div class="contenido_apartado_contacto">
                                <ul>
                                    <li>Dirección: Porto do Son</li>
                                    <li>Telf: <a href="tel:999999999">999 999 999</a></li>
                                    <li>Email: <a href="mailto:adri.13a@gmail.com">adri.13a@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="apartado_contacto_index">
                            <div class="titulo_apartado_contacto">
                                <h3>SÍGUENOS</h3>
                            </div>
                            <div class="contenido_apartado_contacto">
                                <div class="redes_sociales_contacto">
                                    <div class="calcula_alto">
                                        <div class="rs_fb" style="visibility:hidden">
                                            <a href="#">
                                                <img src="/webs/atweb/img/iconos/fb.png" alt="FB">
                                            </a>
                                        </div>
                                        <div class="rs_tw">
                                            <a href="https://twitter.com/AT_DWEB" target="_blank">
                                                <img src="/webs/atweb/img/iconos/tw.png" alt="TW">
                                            </a>
                                        </div>
                                        <div class="rs_gp" style="visibility:hidden">
                                            <a href="#">
                                                <img src="/webs/atweb/img/iconos/g+.png" alt="G+">
                                            </a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="apartado_contacto_index">
                            <div class="titulo_apartado_contacto">
                                <h3>ÚLTIMOS TWEETS</h3>
                            </div>
                            <div class="contenido_apartado_contacto">
                                
                            </div>
                        </div>  
                        <div class="clear"></div>
                    </div>
                </div>    
            </div>

            <div class="footer">
                <div class="contenido_variable">
                    <div class="bloque">
                        <a href="/webs/atweb/aviso_legal.php">Aviso Legal</a> | <a href="/webs/atweb/politica_privacidad.php">Política de Privacidad</a>
                    </div>
                    <div class="bloque">
                        ©AT DISEÑO WEB 2016
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        <?php } ?>
        
        <?php if($idioma == 'en') { ?>
                <div class="contenido_contacto_index">
                    <div class="contenido_variable">
                        <div class="apartado_contacto_index">
                            <div class="titulo_apartado_contacto">
                                <h3>CONTACT</h3>
                            </div>
                            <div class="contenido_apartado_contacto">
                                <ul>
                                    <li>Address: La que sea</li>
                                    <li>Telf: <a href="tel:999999999">999 999 999</a></li>
                                    <li>Email: <a href="mailto:correo@correo.es">correo@correo.es</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="apartado_contacto_index">
                            <div class="titulo_apartado_contacto">
                                <h3>FOLLOW US</h3>
                            </div>
                            <div class="contenido_apartado_contacto">
                                <div class="redes_sociales_contacto">
                                    <div class="calcula_alto">
                                        <div class="rs_fb" style="visibility:hidden">
                                            <a href="#">
                                                <img src="/webs/atweb/img/iconos/fb.png" alt="FB">
                                            </a>
                                        </div>
                                        <div class="rs_tw">
                                            <a href="https://twitter.com/AT_DWEB" target="_blank">
                                                <img src="/webs/atweb/img/iconos/tw.png" alt="TW">
                                            </a>
                                        </div>
                                        <div class="rs_gp" style="visibility:hidden">
                                            <a href="#">
                                                <img src="/webs/atweb/img/iconos/g+.png" alt="G+">
                                            </a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="apartado_contacto_index">
                            <div class="titulo_apartado_contacto">
                                <h3>LAST TWEETS</h3>
                            </div>
                            <div class="contenido_apartado_contacto">
                                
                            </div>
                        </div>  
                        <div class="clear"></div>
                    </div>
                </div>    
            </div>

            <div class="footer">
                <div class="contenido_variable">
                    <div class="bloque">
                        <a href="/webs/atweb/aviso_legal.php?lan=en">Legal Warning</a> | <a href="/webs/atweb/politica_privacidad.php?lan=en">Privacy Policy</a>
                    </div>
                    <div class="bloque">
                        ©AT DISEÑO WEB 2016
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        <?php } ?>

        <?php if($idioma == 'gl') { ?>
                <div class="contenido_contacto_index">
                    <div class="contenido_variable">
                        <div class="apartado_contacto_index">
                            <div class="titulo_apartado_contacto">
                                <h3>CONTACTO</h3>
                            </div>
                            <div class="contenido_apartado_contacto">
                                <ul>
                                    <li>Dirección: La que sea</li>
                                    <li>Telf: <a href="tel:999999999">999 999 999</a></li>
                                    <li>Email: <a href="mailto:correo@correo.es">correo@correo.es</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="apartado_contacto_index">
                            <div class="titulo_apartado_contacto">
                                <h3>SEGUENOS</h3>
                            </div>
                            <div class="contenido_apartado_contacto">
                                <div class="redes_sociales_contacto">
                                    <div class="calcula_alto">
                                        <div class="rs_fb" style="visibility:hidden">
                                            <a href="#">
                                                <img src="/webs/atweb/img/iconos/fb.png" alt="FB">
                                            </a>
                                        </div>
                                        <div class="rs_tw">
                                            <a href="https://twitter.com/AT_DWEB" target="_blank">
                                                <img src="/webs/atweb/img/iconos/tw.png" alt="TW">
                                            </a>
                                        </div>
                                        <div class="rs_gp" style="visibility:hidden">
                                            <a href="#">
                                                <img src="/webs/atweb/img/iconos/g+.png" alt="G+">
                                            </a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="apartado_contacto_index">
                            <div class="titulo_apartado_contacto">
                                <h3>ÚLTIMOS TWEETS</h3>
                            </div>
                            <div class="contenido_apartado_contacto">
                                
                            </div>
                        </div>  
                        <div class="clear"></div>
                    </div>
                </div>    
            </div>

            <div class="footer">
                <div class="contenido_variable">
                    <div class="bloque">
                        <a href="/webs/atweb/aviso_legal.php?lan=gl">Aviso Legal</a> | <a href="/webs/atweb/politica_privacidad.php?lan=gl">Política de Privacidade</a>
                    </div>
                    <div class="bloque">
                        ©AT DISEÑO WEB 2016
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        <?php } ?>

	</div><!-- .contenido -->

	<!--<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	<!--</footer><!-- .site-footer -->

<!--</div><!-- .site -->
</div><!-- .container -->

<?php wp_footer(); ?>

</body>
</html>
