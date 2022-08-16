<?php $social = get_field('social', 'option'); ?>
<!-- Footer
============================================= -->
<footer id="footer" class="dark" style="background-color: #17458f ;">
    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap row col-mb-50">

            <!-- Footer Widget 3
            ============================================= -->
            <div class="col-lg-2 col-sm-6">
                <div class="widget widget_links">
                    <h4 class="mb-3 mb-sm-4 nott ls0">Management</h4>
                    <ul>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'secondary',
                        )); ?>

                    </ul>
                </div>
            </div>

            <!-- Footer Widget 3
            ============================================= -->
            <div class="col-lg-2 col-sm-6">
                <div class="widget widget_links">
                    <h4 class="mb-3 mb-sm-4 nott ls0">Our Products</h4>
                    <ul>
                        <li><a href="https://codex.wordpress.org/">Real Estate</a></li>
                        <li><a href="https://wordpress.org/support/forum/requests-and-feedback">Movers</a></li>
                        <li><a href="https://wordpress.org/extend/plugins/">Stores</a></li>
                        <li><a href="https://wordpress.org/support/">Landing</a></li>
                        <li><a href="https://wordpress.org/extend/themes/">Seo</a></li>
                        <li><a href="https://wordpress.org/news/">CoWorking</a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Widget 3
            ============================================= -->
            <div class="col-lg-2 col-sm-6">
                <div class="widget widget_links">
                    <h4 class="mb-3 mb-sm-4 nott ls0">Support</h4>
                    <ul>
                        <li><a href="https://codex.wordpress.org/">Privacy</a></li>
                        <li><a href="https://wordpress.org/support/forum/requests-and-feedback">Help Center</a></li>
                        <li><a href="https://wordpress.org/extend/plugins/">Chat</a></li>
                        <li><a href="https://wordpress.org/support/">Email Us</a></li>
                    </ul>
                    <div class="mt-3">
                        <a href="<?= $social['facebook_url'] ?>" class="social-icon si-small si-dark si-facebook"
                           title="Facebook" target="_blank">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="<?= $social['instagram_url'] ?>" class="social-icon si-small si-dark si-instagram"
                           title="instagram" target="_blank">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>

                        <a href="<?= $social['twitter_url'] ?>" class="social-icon si-small si-dark si-twitter"
                           title="twitter" target="_blank">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <!-- <a href="#" class="social-icon si-small si-dark si-wikipedia" title="Apple Pay">
                            <i class="icon-apple-pay"></i>
                            <i class="icon-apple-pay"></i>
                        </a> -->
                    </div>
                </div>
            </div>

            <!-- Footer Widget 2
                ============================================= -->
            <div class="col-lg-3 col-sm-6">
                <div class="widget widget_links">
                    <h4 class="mb-3 mb-sm-4 nott ls0">Tag Cloud</h4>
                    <div class="tagcloud">
                        <?php $tags = get_tags();
                        // var_dump($tags);
                        foreach ($tags as $tag):
                            ?>

                            <a href="<?= get_tag_link($tag->term_id) ?>"><?= $tag->name ?></a>
                        <?php endforeach ?>

                    </div>
                </div>
            </div>

            <!-- Footer Widget 4
            ============================================= -->
            <div class="col-lg-3 col-sm-6">
                <div class="widget widget_links">
                    <h4 class="mb-3 mb-sm-4 nott ls0">Download in Mobile</h4>
                    <p><?= $social['footer_description'] ?></p>
                    <a href="#"
                       class="button button-dark  text-light btn-block text-center bg-dark nott ls0 button-rounded button-xlarge noleftmargin"><i
                                class="icon-apple"></i>App Store</a>
                    <a href="#"
                       class="button button-dark  text-light btn-block text-center bg-dark nott ls0 button-rounded button-xlarge noleftmargin"><i
                                class="icon-googleplay"></i>Google Play</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights" class="bg-light">
        <div class="container">

            <div class="row align-items-center justify-content-between col-mb-30">
                <div class="col-lg-auto text-center text-lg-left text-dark">
                    Copyrights &copy; <?php echo date('Y'); ?> All Rights Reserved by RotaryNepal<br>
                    <!-- <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div> -->
                </div>

                <div class="col-lg-auto text-center text-lg-left">
                    <div class="copyrights-menu copyright-links m-0">

                        <a href="#">Home</a>/<a href="#">About</a>/<a href="#">Features</a>/<a href="#">Portfolio</a>/<a
                                href="#">FAQs</a>/<a href="#">Contact</a>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- #copyrights end -->
</footer><!-- #footer end -->
<?php wp_footer(); ?>
</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up rounded-circle" style="left: 30px; right: auto;"></div>

<!-- ADD-ONS JS FILES -->
<script>
    function menuscrollsticky() {
        var scroll = $(window).scrollTop();
        var headerHeight = $('#header').height();
        if (scroll >= headerHeight) {
            $('#header').addClass('sticky');
        } else {
            $('#header').removeClass('sticky');
        }
    }

    const searchBar = $("#header");
    //const headerHeight = searchBar.height();
    let lastScroll = 0;
    $(window).on("scroll", function () {
        let st = $(this).scrollTop();

        if (st > lastScroll) {
            searchBar.removeClass("is-sticky");
        } else {
            searchBar.addClass("is-sticky");
        }

        lastScroll = st;

        if (lastScroll <= 218) {
            searchBar.removeClass("is-sticky");
        }
    });
    $(window).scroll(function () {
        menuscrollsticky();
        //scrollupSticky()
    });
</script>
<script>
    // Current Date
    var weekday = ["Sun", "Mon", "Tues", "Wed", "Thurs", "Fri", "Sat"],
        month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        a = new Date();

    jQuery('.divider-text').html(weekday[a.getDay()] + ', ' + month[a.getMonth()] + ' ' + a.getDate());

    jQuery('.dark-mode').on('click', function () {
        jQuery("body").toggleClass('dark');
        SEMICOLON.header.logo();
        return false;
    });
</script>

</body>
</html>