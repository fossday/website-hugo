<!-- Our Sponsor And Client Area Start -->
<?php include "partials/sponsors_area.php"; ?>
<!-- Our Sponsor And Client Area End -->

<!-- Footer Area Start -->
<footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">
                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">

						<?php the_custom_logo(); ?>
                        <p><?php echo get_option( 'description_field' ); ?></p>

                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="<?php echo get_option( 'facebook_field' ); ?>">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="<?php echo get_option( 'telegram_field' ); ?>">
                                <i class="fa fa-paper-plane"></i></a>
                            <a href="<?php echo get_option( 'github_field' ); ?>">
                                <i class="fa fa-github"></i>
                            </a>
                            <a href="<?php echo get_option( 'linkedin_field' ); ?>">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Widget Title -->
                        <h5 class="widget-title">Contato</h5>

                        <!-- Contact Area -->
                        <div class="footer-contact-info">
                            <p><a href="<?php echo get_option( 'telegram_field' ); ?>" target="_blank"><i
                                            class="fa fa-paper-plane"></i> Grupo no Telegram</a></p>
                            <p><a href="mailto:<?php echo get_option( 'email_field' ); ?>" target="_blank"><i
                                            class="zmdi zmdi-email"></i> <?php echo get_option( 'email_field' ); ?></a>
                            </p>
                            <p><a href="<?php echo get_option( 'facebook_field' ); ?>" target="_blank"><i
                                            class="fa fa-facebook"></i> Mensagem pela página</a></p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Widget Title -->
                        <h5 class="widget-title">Saiba mais</h5>

                        <!-- Footer Nav -->
						<?php wp_nav_menu( array(
							'theme_location' => 'footer-menu',
							'container'      => 'ul',
							'menu_class'     => 'footer-nav',
						) );
						?>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="container">
        <div class="copywrite-content">
            <div class="row">
                <!-- Copywrite Text -->
                <div class="col-12 col-md-6">
                    <div class="copywrite-text">
                        <p>
                            &copy;<script>document.write(new Date().getFullYear());</script>
                            | Desenvolvido com amor <i class="fa fa-heart" aria-hidden="true"></i> por <a
                                    href="https://doseextra.com#blogcareus" target="_blank">Dose Extra</a>
                        </p>
                        <p>
                            Baseado no <a href="https://colorlib.com" target="_blank">Confer</a>
                        </p>
                    </div>
                </div>
                <!-- Footer Menu -->
                <div class="col-12 col-md-6">
                    <div class="footer-menu">
                        <ul class="nav">
                            <li><a href="<?php echo get_bloginfo( 'url' ); ?>/o-que-e-o-fossday"><i
                                            class="zmdi zmdi-circle"></i> Sobre o FOSSDay</a></li>
                            <li><a href="<?php echo get_bloginfo( 'url' ); ?>/politicas-de-privacidade"><i
                                            class="zmdi zmdi-circle"></i> Políticas de Privacidade</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- engine js -->
<script defer src="<?php echo get_bloginfo( 'template_directory' ); ?>/dist/jquery.min.js"></script>
<!-- custom js -->
<script defer src="<?php echo get_bloginfo( 'template_directory' ); ?>/dist/app_bundle.js"></script>

</body>

<?php wp_footer(); ?>

</html>