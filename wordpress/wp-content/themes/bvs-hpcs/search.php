<?php get_header(); ?>

<div class='content'>
    <div class='container'>
        <div class='row single'>
            <div class='col-sm-12'>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

                        <a href="<?php the_permalink(); ?>">
                            <h2 class="storytitle"><?php the_title(); ?></h2>
                        </a>

                        <div class="storycontent">
                            <?php the_content(__('(more...)')); ?>
                        </div>
                        <div class="child-pages">
                            <ul>
                              <?php
                                 global $id;
                                 $post_type = get_post_type( $id );
                                 wp_list_pages("post_type=" . $post_type. "&title_li=&child_of=" . $id);
                              ?>
                            </ul>
                        </div>
                    </div>
                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
