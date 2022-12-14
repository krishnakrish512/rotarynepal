<div class="section section-colored rounded px-4">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-5">
            <h3 class="mb-4 mb-lg-0"><?php the_sub_field('newsletter_title'); ?></h3>
        </div>
        <div class="col-lg-6">
            <div class="widget subscribe-widget" data-loader="button">

                <div class="widget-subscribe-form-result"></div>
                <form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0 d-flex">
                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email"
                           class="form-control form-control-lg not-dark required email"
                           placeholder="Your Email Address">
                    <button class="button button-large button-black button-dark font-weight-medium ls0 button-rounded m-0 ml-3"
                            type="submit">Subscribe Now
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
