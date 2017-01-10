<?php get_header(); ?>

<div class='content'>
    <div class='container'>
        <div class='row'>
            <div class='col-sm-9'>
                <div class='row themes'>
                    <?php dynamic_sidebar('themes'); ?>
                    <div class='col-md-12'>&nbsp;</div>
                </div>

                <div class='row sub-themes'>
                    <?php dynamic_sidebar('sub-themes'); ?>
                    <div class='col-md-12'>&nbsp;</div>
                </div>

            </div>

            <div class='col-sm-3'>
                <div class='row sidebar'>
                    <?php dynamic_sidebar('sidebar'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
