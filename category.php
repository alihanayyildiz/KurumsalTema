<?php get_header();?>
<div class="category-img">
	<img src="<?php bloginfo('template_url');?>/img/category.png" width="100%" height="100%"/>;
	<div class="container">
		<div class="row">
			<div class="single-post-title" id="category-top-title">
				<?php single_cat_title();?>			
			</div>
			<div class="img-cat">
				<img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>">
			</div>
		</div>
	</div>
</div>
	<div class="kapla">
		<div class="container">
			<div class="row">
				<?php query_posts($query_string . ''); ?>
                	<?php if ( have_posts() ) : while ( have_posts() ) :the_post(); ?>
			    <div class="col-md-4 col-sm-4 col-xs-12">
	            	<div class="post">
    	            	<div class="post-img">
						<a href="<?php the_permalink(); ?>">
	                    <?php
	                    if (has_post_thumbnail()) { the_post_thumbnail('anasyfa',array('class'=>'makale-resim'));}
    	                else{ ?>
                            <img src="<?php bloginfo("template_url"); ?>/img/no-image.jpg"> <?php } ?>
                        </a>
        		        </div>
		                <div class="post-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    			        </div>
				</div>		
			</div>
			<?php endwhile; else: ?>
        	<?php endif;?>
		</div>
		<div class="category-write" stye="display:<?php echo get_post_meta($post->ID, "Kategori_Aciklama_Gizle", true); ?>;">
			<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
        <div class="post-bottom">
            <div class="post-bottom-title category-a-title"><?php single_cat_title();?></div>
            <div class="post-bottom-write category-a-write">
                <?php echo category_description( $category ); ?>   
            </div>
        </div>
    </div>
		</div>
	</div>
<div class="f-top" style="margin-top:0px;">
	<?php get_footer();?>
	</div>