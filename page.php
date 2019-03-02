<?php get_header();?>
<div class="page-img">
    <img src="<?php bloginfo('template_url');?>/img/bg.jpg" width="100%" height="100%"/>

<div class="kapla">
<div class="container">
    <div class="row">
        <center>
            <div class="page">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <?php
	            if (has_post_thumbnail()) { the_post_thumbnail('anasyfa',array('class'=>'makale-resim'));}
	            else{ ?> <?php } ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                </div>
                <div class="page-write">
                    <?php the_content();?>
                </div>
            </div>
        </center>
        <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<?php get_footer();?>