<div class="container">
    <!-- All Categories
					============================================= -->
    <div class="row border-between posts-md col-mb-50 mb-0">
        <?php $categories = get_categories();
        foreach ($categories as $category): ?>
            <div class="col-md-6 col-lg-3">

                <h3><?= $category->name ?></h3>


                <div class="row col-mb-30 mb-0">
                    <?php
                    // $categoryids = array(3,6,8,19);
                    // var_dump($categories);
                    $the_query = new WP_Query(array(
                        
                        'posts_per_page' => 6, 'offset'=> 0, 'category' => array(2,3,25,30)
                    ));
                    //  var_dump($the_query);
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        ?>
                        <article class="entry col-12">
                            <div class="grid-inner">
                                <div class="entry-title title-sm">
                                    <h3><a href="<?php the_permalink() ?>"
                                           class="stretched-link color-underline"><?php the_title() ?></a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><?php the_time('jS F Y'); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>


                </div>

                <!-- <a href="demo-blog-categories.html" class="more-link">View more<i class="icon-line-arrow-right"></i></a> -->
            </div>
        <?php endforeach; ?>

        <div class="col-md-6 col-lg-3 d-none">
            <h3>Travel</h3>

            <div class="row col-mb-30 mb-0">
                <article class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-title title-sm">
                            <h3><a href="demo-blog-single.html" class="stretched-link color-underline">A Visual Trek
                                    Through the Sweltering Jungle: In Search of Colombia’s ‘Lost City’</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#">Mar 11, 2020</a></li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-title title-sm">
                            <h3><a href="demo-blog-single.html" class="stretched-link color-underline">Believe In Your
                                    Travel Skills But Never Stop Improving</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#">Mar 11, 2020</a></li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-title title-sm">
                            <h3><a href="demo-blog-single.html" class="stretched-link color-underline">How I Improved My
                                    Travel In One Easy Lesson</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#">Mar 11, 2020</a></li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>

            <a href="demo-blog-categories.html" class="more-link">View more<i class="icon-line-arrow-right"></i></a>
        </div>

        <div class="col-md-6 col-lg-3 d-none">
            <h3>Fashion</h3>

            <div class="row col-mb-30 mb-0">
                <article class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-title title-sm">
                            <h3><a href="demo-blog-single.html" class="stretched-link color-underline">Top 10 Tips To
                                    Grow Your Fashion</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#">Mar 11, 2020</a></li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-title title-sm">
                            <h3><a href="demo-blog-single.html" class="stretched-link color-underline">4 Ways You Can
                                    Grow Your Creativity Using Fashion</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#">Mar 11, 2020</a></li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-title title-sm">
                            <h3><a href="demo-blog-single.html" class="stretched-link color-underline">Top 15 Best
                                    Fashion Android/iPhone Apps</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#">Mar 11, 2020</a></li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>

            <a href="demo-blog-categories.html" class="more-link">View more<i class="icon-line-arrow-right"></i></a>
        </div>

        <div class="col-md-6 col-lg-3 d-none">
            <h3>Food</h3>

            <div class="row col-mb-30 mb-0">
                <article class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-title title-sm">
                            <h3><a href="demo-blog-single.html" class="stretched-link color-underline">Everything you
                                    need to know about supermarket delivery slots</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#">Mar 11, 2020</a></li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-title title-sm">
                            <h3><a href="demo-blog-single.html" class="stretched-link color-underline">How the diet
                                    industry uses and misuses knowledge of hunger and satiety</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#">Mar 11, 2020</a></li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-title title-sm">
                            <h3><a href="demo-blog-single.html" class="stretched-link color-underline">6 protein-rich
                                    chutneys that can replace vegetables</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#">Mar 11, 2020</a></li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>

            <a href="demo-blog-categories.html" class="more-link">View more<i class="icon-line-arrow-right"></i></a>
        </div>
    </div> <!-- All Categories Section End -->

</div>
</div>
</section><!-- #content end -->