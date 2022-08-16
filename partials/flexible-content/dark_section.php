<!-- Dark Section Spotlight
============================================= -->
<div class="section dark">
    <div class="container">
        <h2 class="font-secondary font-weight-medium"><?php the_sub_field('title'); ?></h2>
        <div class="row border-between">
            <?php
            $post_object = get_sub_field('section');

            if ($post_object):

                $post = $post_object;
                // var_dump($post);
                setup_postdata($post);

                ?>
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <!-- Post Article -->
                    <article class="entry border-bottom-0 mb-0">
                        <div class="entry-image">
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('full'); ?>"
                                                                     alt="Image 3"></a>
                        </div>
                        <div class="entry-title">
                            <div class="entry-categories"><a href="demo-blog-categories.html">Coronavirus Update
                                    - <?php the_category($post->ID) ?></a></div>
                            <h3><a href="<?= get_category_link($post->ID) ?>"
                                   class="stretched-link color-underline"><?php the_title(); ?></a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><?php the_time('jS F Y'); ?></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p><?php the_field('biref') ?></p>
                        </div>
                    </article>
                </div>
                <?php wp_reset_postdata();
            endif
            ?>
