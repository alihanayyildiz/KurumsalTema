<div class="head" style="z-index:1 !important;">

    <?php get_header();?>
</div>
<div class="slider" style="z-index:2 !important;">
    <?php include('slider.php');?>
</div>
<div class="background" style="background:#EFEFF0;">
<div class="container">
    <div class="row">
        
    <?php foreach (get_categories() as $cat) : ?>
    <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="post">
    <div class="post-img">
        <a href="<?php echo get_category_link($cat->term_id); ?>">
            <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" width="100%" height="200px"/>
        </a>
        </div>

        <div class="post-title">
            <li>
                <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->cat_name; ?></a>
            </li>
            
        </div>

        </div>
       
</div>
<?php endforeach; ?>        
<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="post">
    <div class="post-img">
        <a href="servo.php">
            <img src="<?php bloginfo('template_url')?>/img/no-image.jpg" width="100%" height="200px"/>
        </a>
        </div>

        <div class="post-title">
            <li>
                <a href="http://localhost:81/wordpress/servo">SERVO</a>
            </li>
            
        </div>

        </div>
       
</div>

   <!--     <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="post">
                <div class="post-img">
                    
                </div>
                <div class="post-title">
                    <a href="< ?php the_permalink();?>">< ?php the_title();?></a>  
                </div>
                <!--< ?php wp_list_cats('title_li=&include=3'); ?>-->
       <!--     </div>
        </div>
-->
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
        <div class="post-bottom">
            <div class="post-bottom-title">MASZYNY DO SZYCIA JACK</div>
            <hr style="height:1px; background:#06a7e2; width:100%;"/> 
            <div class="post-bottom-write">
                
                    Firma Jack – maszyny do szycia – to niekwestionowany światowy lider w kategorii maszyn i urządzeń szwalniczych. Nieustannie rozwijana technologia, nowoczesne rozwiązania, wysokiej jakości materiały i różne stopnie zautomatyzowania pracy przekładają się na ogromną popularność urządzeń Jack i łatwość ich użytkowania. Maszyny specjalistyczne, drabinkowe, overlocki i stebnówki to nasza specjalność.
                
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer();?>