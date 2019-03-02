<div class="head" style="z-index:1 !important;">
    <?php get_header();?>
</div>

<div class="background" style="background:#EFEFF0;">
    <div class="container">
        <div class="row">    
            <div class="col-md-12">
                <h2>Nowe wyszukanie?</h2>
                <p>Jeżeli nie możesz znaleźć czego szukasz, spróbuj jeszcze raz!</p>
                <form role="search404" method="get" id="searchTerim" action='<?php echo home_url( '/' ); ?>'>
                    <input type="text" class="searchTerim" name="s" id="s" placeholder="Search..." required style="width:93%;">
                    <button type="submit" class="searchButton404" id="searchTerim" style="margin-right:60px;" >
                        <i class="fa fa-search"></i>
                    </button>
                </form>
                <div class="col-md-12" style="margin-top:100px;">
                    <hr style="background:#E7E7E7; height:1px; margin-top:30px !important; margin-top:20px;">
                </div>
            </div>
</div>
    <div class="col-md-12 no-padding" >
        <?php query_posts($query_string . ''); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) :the_post(); ?>
        <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:20px; min-height:750px;">
            <div class="col-md-12 search-post">
            <div class="search-post-title">    
                <a href="<?php the_permalink();?>"><?php the_title();?></a>  
            </div>
            <div class="author" style="font-family: Tahoma, Verdana, Segoe, sans-serif; font-size:12px;">
               By <a href="<?php the_permalink();?>"><?php the_author(); ?></a> |
            </div>
            <div class="date" style="font-family: Tahoma, Verdana, Segoe, sans-serif; font-size:12px;">
                <?php echo get_the_date(); ?>
            </div>
            <hr style="background:#E7E7E7; height:1px; margin-top:10px !important;">
            <hr style="background:#E7E7E7; height:1px; margin-top:5px !important;">
            <div class="search-post-write" style="font-family: Tahoma, Verdana, Segoe, sans-serif; font-size:14px; line-height:30px; text-align:left; padding:10px 20px;">
                <?php wpn_content_limit(get_the_content(),200); ?>
            <br><a href="<?php the_permalink();?>" style="font-family: Tahoma, Verdana, Segoe, sans-serif; font-size:12px;">Daha Fazla Oku</a>
                </div>
            </div>
        </div>
        <?php endwhile; else: ?>            
            <h4>Üzgünüz Aradığınız Kelimeye Uygun Bir Sonuç Bulunamadı</h4>
        
        <?php endif;?>

            </div>
        </div>
        <div class="f_top" style="margin-top:40px;">
    <?php get_footer();?>
</div>
