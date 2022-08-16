<?php get_header(); ?>

    <!-- Content
       ============================================= -->
    <section id="content">

        <div class="content-wrap pt-5" style="overflow: visible;">

            <div class="container">
                <!-- Single Page Content
                ============================================= -->
                <div class="single-post mb-0">
                    <?php
                    while (have_posts()):
                        the_post();
                        ?>
                        <div class="row">
                            <div class="col-lg-9">
                                <!-- Single Post
                                    ============================================= -->
                                <div class="entry">
                                    <!-- Entry Title
                                        ============================================= -->
                                    <div class="entry-title">
                                        <div class="entry-categories"><a href="demo-blog-categories.html">Coronavirus
                                                Update
                                                - World</a></div>
                                        <h2><?php the_title(); ?></h2>
                                    </div><!-- .entry-title end -->

                                    <!-- Entry Meta
                                        ============================================= -->
                                    <div class="entry-meta mt-2">
                                        <ul>
                                            <li><?php the_time('jS F Y'); ?></li>
                                            <li>By <a href="#"><?php the_field('author_name'); ?></a></li>
                                        </ul>
                                    </div><!-- .entry-meta end -->

                                    <!-- Entry Image
                                        ============================================= -->
                                    <div class="entry-image mt-5">
                                        <a href="demos/blog/images/single/hero-full.jpg" data-lightbox="image"><img
                                                    class="rounded" src="<?php the_post_thumbnail_url('full'); ?>"
                                                    alt="Blog Single"></a>
                                    </div><!-- .entry-image end -->

                                    <!-- Entry Content
                                        ============================================= -->
                                    <div class="entry-content">

                                        <div class="text-content">
                                            <?php the_content(); ?>

                                            <div class="line"></div>

                                            <!-- Tag Cloud
                                                ============================================= -->
                                            <div class="tagcloud">
                                                <h4>Related Tags</h4>
                                                <?php $tags = get_tags();
                                                // var_dump($tags);
                                                foreach ($tags as $tag):
                                                    ?>

                                                    <a href="<?= get_tag_link($tag->term_id) ?>"><?= $tag->name ?></a>
                                                <?php endforeach ?>

                                            </div><!-- .tagcloud end -->

                                            <div class="clear"></div>

                                            <!-- Comments
                                                ============================================= -->
                                            <div id="comments">

                                                <!-- <h3 id="comments-title"><span>3</span> Comments</h3> -->

                                                <!-- Comments List
                                                    ============================================= -->
                                                <ol class="commentlist d-none">

                                                    <li class="comment even thread-even depth-1" id="li-comment-1">

                                                        <div id="comment-1" class="comment-wrap">

                                                            <div class="comment-meta">

                                                                <div class="comment-author vcard">

                                                            <span class="comment-avatar">
                                                                <img alt=''
                                                                     src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60'
                                                                     class='avatar avatar-60 photo avatar-default'
                                                                     height='60' width='60'/></span>

                                                                </div>

                                                            </div>

                                                            <div class="comment-content">

                                                                <div class="comment-author">John Doe<span><a href="#"
                                                                                                             title="Permalink to this comment">April 24, 2012 at
                                                                    10:46 am</a></span>
                                                                </div>

                                                                <p>Donec sed odio dui. Nulla vitae elit libero, a
                                                                    pharetra
                                                                    augue. Nullam id dolor id nibh ultricies vehicula ut
                                                                    id
                                                                    elit. Integer posuere erat a ante venenatis dapibus
                                                                    posuere velit aliquet.</p>

                                                                <a class='comment-reply-link' href='#'><i
                                                                            class="icon-reply"></i></a>

                                                            </div>

                                                            <div class="clear"></div>

                                                        </div>


                                                        <ul class='children'>

                                                            <li class="comment byuser comment-author-_smcl_admin odd alt depth-2"
                                                                id="li-comment-3">

                                                                <div id="comment-3" class="comment-wrap">

                                                                    <div class="comment-meta">

                                                                        <div class="comment-author vcard">

                                                                    <span class="comment-avatar">
                                                                        <img alt=''
                                                                             src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G'
                                                                             class='avatar avatar-40 photo' height='40'
                                                                             width='40'/></span>

                                                                        </div>

                                                                    </div>

                                                                    <div class="comment-content">

                                                                        <div class="comment-author"><a href='#'
                                                                                                       rel='external nofollow'
                                                                                                       class='url'>SemiColon</a><span><a
                                                                                        href="#"
                                                                                        title="Permalink to this comment">April 25,
                                                                            2012 at 1:03 am</a></span>
                                                                        </div>

                                                                        <p>Nullam id dolor id nibh ultricies vehicula ut
                                                                            id
                                                                            elit.</p>

                                                                        <a class='comment-reply-link' href='#'><i
                                                                                    class="icon-reply"></i></a>

                                                                    </div>

                                                                    <div class="clear"></div>

                                                                </div>

                                                            </li>

                                                        </ul>

                                                    </li>

                                                    <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1"
                                                        id="li-comment-2">

                                                        <div id="comment-2" class="comment-wrap">

                                                            <div class="comment-meta">

                                                                <div class="comment-author vcard">

                                                            <span class="comment-avatar">
                                                                <img alt=''
                                                                     src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G'
                                                                     class='avatar avatar-60 photo' height='60'
                                                                     width='60'/></span>

                                                                </div>

                                                            </div>

                                                            <div class="comment-content">

                                                                <div class="comment-author"><a
                                                                            href='https://themeforest.net/user/semicolonweb'
                                                                            rel='external nofollow'
                                                                            class='url'>SemiColon</a><span><a href="#"
                                                                                                              title="Permalink to this comment">April 25, 2012 at
                                                                    1:03 am</a></span>
                                                                </div>

                                                                <p>Integer posuere erat a ante venenatis dapibus posuere
                                                                    velit aliquet.</p>

                                                                <a class='comment-reply-link' href='#'><i
                                                                            class="icon-reply"></i></a>

                                                            </div>

                                                            <div class="clear"></div>

                                                        </div>

                                                    </li>

                                                </ol>
                                                <div class="clear"></div>

                                                <!-- Comment Form
                                                    ============================================= -->
                                                <!-- <div id="respond d-none">

                                                    <h3>Leave a <span>Comment</span></h3>

                                                    <form class="row mb-0" action="#" method="post" id="commentform">

                                                        <div class="form-group col-4">
                                                            <label for="author">Name</label>
                                                            <input type="text" name="author" id="author" value="" size="22"
                                                                tabindex="1" class="form-control" />
                                                        </div>

                                                        <div class="form-group col-4">
                                                            <label for="email">Email</label>
                                                            <input type="text" name="email" id="email" value="" size="22"
                                                                tabindex="2" class="form-control" />
                                                        </div>

                                                        <div class="form-group col-4">
                                                            <label for="url">Website</label>
                                                            <input type="text" name="url" id="url" value="" size="22"
                                                                tabindex="3" class="form-control" />
                                                        </div>

                                                        <div class="w-100"></div>

                                                        <div class="form-group col-12">
                                                            <label for="comment">Comment</label>
                                                            <textarea name="comment" id="comment" cols="58" rows="7"
                                                                tabindex="4" class="form-control"></textarea>
                                                        </div>

                                                        <div class="form-group col-12 mt-4 mb-0">
                                                            <button name="submit" type="submit" id="submit-button" tabindex="5"
                                                                value="Submit"
                                                                class="button button-large button-black button-dark nott font-weight-medium ls0 button-rounded m-0">
                                                                Submit Comment
                                                            </button>
                                                        </div>

                                                    </form>

                                                </div>#respond end -->

                                            </div><!-- #comments end -->
                                        </div>
                                        <!-- Post Single - Content End -->

                                    </div>
                                </div><!-- .entry end -->
                            </div>
                            <div class="sidebar col-lg-3 ">
                                <div class="sidebar-widgets-wrap">
                                    <div class="widget clearfix ">
                                        <h4>Related Blog</h4>
                                        <div class="posts-sm row col-mb-30">
                                            <?php $args = array(
                                                'tag__in' => $tag_ids,
                                                'post__not_in' => array($post->ID),
                                                'posts_per_page' => 3, // Number of related posts to display.
                                                'caller_get_posts' => 1
                                            );
                                            $my_query = new wp_query($args);

                                            while ($my_query->have_posts()):
                                                $my_query->the_post();
                                                ?>
                                                <div class="entry col-12">
                                                    <div class="grid-inner row no-gutters border-0 p-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="<?php the_permalink() ?>"><img
                                                                            src="<?php the_post_thumbnail_url('full'); ?>"
                                                                            alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="entry-title">
                                                                <h4>
                                                                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                                                </h4>
                                                            </div>
                                                            <div class="entry-meta d-none">
                                                                <ul>
                                                                    <li><i class="icon-comments-alt"></i> 35 Comments
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endwhile;
                                            wp_reset_query();
                                            ?>

                                        </div>
                                    </div>
                                    <div class="widget">
                                        <!-- Post Single - Share
            ============================================= -->
                                        <div>
                                            <h5 class="mb-2">Share this Post:</h5>
                                            <div>
                                                <?php $facebook_url = "https://www.facebook.com/sharer.php?u=" . get_the_permalink(get_the_ID());
                                                $linkedin_url = "https://www.linkedin.com/sharing/share-offsite/?url=" . get_the_permalink(get_the_ID());
                                                $twitter_url = add_query_arg(
                                                    [
                                                        'text' => urlencode(get_the_title(get_the_ID())),
                                                        'url' => get_the_permalink(get_the_ID()),

                                                    ],
                                                    "https://www.twitter.com/intent/tweet?"
                                                ); ?>
                                                <a href="<?= $facebook_url; ?>"
                                                   class="social-icon si-small si-rounded si-colored si-facebook">
                                                    <i class="icon-facebook"></i>
                                                    <i class="icon-facebook"></i>
                                                </a>
                                                <a href="<?= $twitter_url; ?>"
                                                   class="social-icon si-small si-rounded si-colored ml-1 si-twitter">
                                                    <i class="icon-twitter"></i>
                                                    <i class="icon-twitter"></i>
                                                </a>
                                                <a href="<?= $linkedin_url; ?>"
                                                   class="social-icon si-small si-rounded si-colored ml-1 si-linkedin">
                                                    <i class="icon-linkedin"></i>
                                                    <i class="icon-linkedin"></i>
                                                </a>
                                            </div>
                                        </div><!-- Post Single - Share End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <!-- Single Page Content -->
            </div>

        </div>

    </section><!-- #content end -->
<?php get_footer(); ?>