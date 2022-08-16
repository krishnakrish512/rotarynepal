<div class="container">

    <!-- Based On Your Reading History
					============================================= -->
    <div class="row border-between">

        <!-- Left Side of Based On Your Reading History
						============================================= -->
        <div class="col-lg-8">
            <h3 class="font-secondary font-weight-medium"><?php the_sub_field('title'); ?></h3>

            <div class="row col-mb-50">
                <?php $args = array(
                    'tag__in' => $tag_ids,
                    'post__not_in' => array($post->ID),
                    'posts_per_page' => 4, // Number of related posts to display.
                    'caller_get_posts' => 1
                );
                $my_query = new wp_query($args);

                while ($my_query->have_posts()):
                    $my_query->the_post();
                    ?>


                    <article class="col-12">
                        <div class="row">
                            <div class="col-md-6 entry-image mb-0">
                                <a href="<?php the_permalink($posts->ID); ?>">
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Image">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="entry-title mt-lg-0 mt-3">
                                    <div class="entry-categories"><a href="demo-blog-categories.html">
                                            <?php the_category($post->ID) ?></a></div>
                                    <h3><a href="<a href=" <?= get_category_link($post->ID) ?>"
                                        class="color-underline stretched-link"><?= get_the_title(); ?></a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><?php the_time('jS F Y'); ?></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p><?php the_field('biref') ?></p>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_query();

                ?>


            </div>
        </div>

        <!-- Right Side of Based On Your Reading History - Sticky
						============================================= -->
        <div class="col-lg-4 mt-5 mt-lg-0 position-sticky h-100" style="top: 234px;">
            <h3 class="font-secondary font-weight-medium"><?php the_sub_field('sticky_title'); ?></h3>

            <ul class="week-posts posts-sm row col-mb-30">
                <?php
                $the_query = new WP_Query(wp_get_recent_posts(['numberposts' => 3]));
                while ($the_query->have_posts()) : $the_query->the_post();

                    ?>
                    <li class="entry col-12">
                        <div class="grid-inner">
                            <div class="entry-title">
                                <h4><a href="<?php the_permalink(); ?>"
                                       class="color-underline stretched-link"><?= the_title(); ?></a></h4>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><?php the_time('jS F Y'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                <?php endwhile;
                wp_reset_postdata();
                ?>

            </ul>

            <div class="line line-sm"></div>

            <!-- <h3 class="font-secondary font-weight-medium">Ad</h3>
            <div class="fb-post" data-href="https://www.facebook.com/semicolonweb/posts/2855299871172671"
                data-width="500" data-show-text="false"></div> -->

        </div>
    </div> <!-- Based On Your Reading History End -->
</div>