<div class="col-lg-5">
    <h3 class="font-secondary font-weight-medium mb-4 h4"><?php the_sub_field('title') ?></h3>

    <div class="row posts-md col-mb-30">
        <?php

        $args = [
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'post_date',
            'order' => 'DESC',
            'posts_per_page' => 3
        ];
        $posts = get_posts($args);
        foreach ($posts as $post):
            ?>
            <article class="entry col-12">
                <div class="grid-inner row gutter-20">
                    <div class="entry-image col-md-4">
                        <?php $image = get_the_post_thumbnail($post->ID,'thumb-crazy'); ?>
                        <a href="<?= get_the_permalink($post->ID); ?>"><?= $image; ?></a>
                    </div>
                    <div class="col-md-8">
                        <div class="entry-title title-xs">
                            <div class="entry-categories"><a
                                        href="<?= get_category_link($post->ID) ?>"><?php the_category($post->ID) ?></a>
                            </div>
                            <h3><a href="<?= get_the_permalink($post->ID); ?>"
                                   class="stretched-link color-underline"><?= get_the_title($post->ID); ?></a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><?php the_time('jS F Y'); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        <?php endforeach;
        wp_reset_postdata();
        ?>
    </div>

</div>
</div>

