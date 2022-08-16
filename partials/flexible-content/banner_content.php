<?php echo do_shortcode( '[custom_contact_form]' ); ?>

<section id="content">
    <div class="content-wrap pt-5" style="overflow: visible;">
        <div class="container">

            <div class="row border-between">
                <div class="row posts-md col-mb-30">
                    <?php 
                   $post_object = get_sub_field('content');
               
                if( $post_object ):

                    $post = $post_object;
                    // var_dump($post);
                setup_postdata($post );
                
                ?>
                    <div class="col-lg-7 mb-5 mb-lg-0">

                        <article class="entry border-bottom-0 mb-0">
                            <div class="entry-image">
                                <a href="<?php the_permalink(); ?>"><img
                                        src="<?php the_post_thumbnail_url('full'); ?>" alt="Image 3"></a>
                            </div>
                            <div class="entry-title">
                                <div class="entry-categories"><a href="<?= get_category_link($post->ID) ?>">Coronavirus
                                        Update - <?php the_category($post->ID) ?></a></div>
                                <h3><a href="<?php the_permalink(); ?>"
                                        class="stretched-link color-underline"><span><?php the_title(); ?></span></a>
                                </h3>
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

                            