<div class="d-flex justify-content-between mb-4">
    <h3 class="font-secondary font-weight-medium m-0"><?php the_sub_field('title'); ?></h3>
    <!-- <a href="#" class="btn btn-sm btn-outline-secondary">More Content <i class="icon-line-arrow-right"></i></a> -->
</div>

<div class="row posts-md col-mb-30">
    <?php while (have_rows('video_repeater')):
        the_row()
        ?>
        <div class="col-md-4">
            <article class="entry border-bottom-0 mb-0">
                <div class="entry-image">

                    <?php the_sub_field('video_url'); ?>
                    <!-- <div class="play-icon"><i class="icon-play"></i>Watch</div> -->

                </div>
                <div class="entry-title title-sm">
                    <div class="entry-categories"><a
                                href="demo-blog-categories.html"><?php the_sub_field('category') ?></a></div>
                    <h3><a href="demo-blog-single.html" class="color-underline"><?php the_sub_field('title') ?></a></h3>
                </div>
                <div class="entry-meta d-none">
                    <ul>
                        <li><a href="#">Mar 11, 2016</a></li>
                    </ul>
                </div>
            </article>
        </div>
    <?php endwhile ?>


</div>
</div>

