<?php
get_header(); ?>


    <!-- Page Title
            ============================================= -->
    <section id="page-title" class="page-title-center d-none">

        <div class="container">
            <h1>Lifestyle</h1>
            <span>Phosfluorescently target clicks-and-mortar growth strategies for timely infrastructures. Monotonectally
            embrace high-quality applications.</span>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
            ============================================= -->
    <section id="content">
        <div class="content-wrap pt-0 pt-sm-6">
            <div class="container">

                <!-- Single Page Categories
                        ============================================= -->
                <div class="row gutter-50">
                    <div class="col-lg-3 cat-widgets position-sticky h-100">
                        <div class="widget widget-search">
                            <form class="input-group">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary icon-line-search" type="button"></button>
                                </div>
                            </form>
                        </div>

                        <div class="widget widget-nav mt-md-5">
                            <ul class="nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">All Categories</a>
                                </li>
                                <?php $categories = get_categories();
                                foreach ($categories as $category): ?>
                                    <li class="nav-item ">
                                        <a class="nav-link"
                                           href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-9 mt-5 mt-lg-0">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h3>All Posts</h3>
                            </div>
                            <div>
                                <!-- Example single danger button -->
                                <div class="btn-group d-none">
                                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Most Popular
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Latest Posts</a>
                                        <a class="dropdown-item" href="#">Most Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row col-mb-50 posts-md">
                            <?php
                            while (have_posts()) {
                                the_post();
                                ?>
                                <div class="col-md-4">
                                    <article class="entry">
                                        <div class="entry-image mb-3">
                                            <a href="<?php the_permalink(); ?>"><img
                                                        src="<?php the_post_thumbnail_url('full'); ?>"
                                                        alt="Image 3"></a>
                                        </div>
                                        <div class="entry-title title-sm">
                                            <div class="entry-categories"><a
                                                        href="<?= get_category_link($post->ID) ?>"><?php the_category($post->ID) ?></a>
                                            </div>
                                            <h3><a href="<?php the_permalink(); ?>"
                                                   class="color-underline stretched-link"><?php the_title(); ?></a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><?php the_time('jS F Y'); ?></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content mt-3">
                                            <p><?php the_field('biref') ?></p>
                                            <a href="<?php the_permalink(); ?>" class="more-link">Read the artcile</a>
                                        </div>
                                    </article>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
                <!-- Single Page Categories End -->

                <!-- Subscribe Section
                        ============================================= -->
                <?php get_template_part('/partials/newsletter'); ?>
                <!-- Subscribe Section End -->

            </div>
        </div>
    </section><!-- #content end -->


<?php get_footer(); ?>