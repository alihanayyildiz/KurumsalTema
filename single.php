<?php get_header();?>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            
            <div class="single-post-img">
            <div class="single-post-title">
                <?php echo get_post_meta($post->ID, "Single_Resim_Baslik", true); ?>
            </div>
                <img class="one_cikan_resim" src="<?php echo resmi_getir();?>" width="100%" height="100%"/>
            </div>
        </div>
    </div>
    <div class="kapla">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="single">
                        <div class="single-title">
                            <?php the_title();?>
                        </div>
                        <div class="single-short-title">
                            <?php echo get_post_meta($post->ID, "Single_Alt_Baslik", true); ?>
                        </div>
                        <hr style="height:1px; background:#06A7E2;"/>
                        <div class="single-post-write">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile; else: ?>
								<p>Üzgünüz! Konuya Ait Bir Yazı Bulunamadı...</p>
								<?php endif; ?>
                        </div>
                    </div>
                    <div class="single" id="pdf" style="display:<?php echo get_post_meta($post->ID, "Pdf_gizle", true); ?>">
                        <a href="<?php echo get_post_meta($post->ID, "Link", true); ?>" target="_blank">INSTRUKCJA OBSŁUGI MASZYNY <?php echo get_post_meta($post->ID, "Single_Resim_Baslik", true); ?></a>
                    </div>
                    <div class="single" style="display:<?php echo get_post_meta($post->ID, "Video_gizle", true); ?>">
                        <div class="video">
                            <iframe width="650" height="350"src="<?php echo get_post_meta($post->ID, "Video", true); ?>"></iframe>
                        </div>
                    </div>
                    <div class="single-bottom">
                    <div class="single no-padding" style="display:<?php echo get_post_meta($post->ID, "AciklamaSol1_gizle", true); ?>">
                        <div class="single-left-opt">
                            <div class="col-md-5 col-sm-5 col-xs-5 no-padding">
                                <div class="Aciklama_Resim no-padding">
                                    <img src="<?php echo get_post_meta($post->ID, "Aciklama_Resim_Sol1", true); ?>">
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-7">
                                <div class="Aciklama_Baslik">
                                    <?php echo get_post_meta($post->ID, "Aciklama_Baslik_Sol1", true); ?>
                                </div>
                                <div class="Aciklama">
                                    <?php echo get_post_meta($post->ID, "Aciklama_Sol1", true); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="single no-padding" style="margin-top:20px; display:<?php echo get_post_meta($post->ID, "AciklamaSag1_gizle", true); ?>">
                            <div class="single-right-opt">
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                    <div class="Aciklama_Baslik">
                                        <?php echo get_post_meta($post->ID, "Aciklama_Baslik_Sag1", true); ?>
                                    </div>
                                    <div class="Aciklama">
                                        <?php echo get_post_meta($post->ID, "Aciklama_Sag1", true); ?>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5 no-padding">
                                    <div class="Aciklama_Resim no-padding">
                                        <img src="<?php echo get_post_meta($post->ID, "Aciklama_Resim_Sag1", true); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single no-padding" style="display:<?php echo get_post_meta($post->ID, "AciklamaSol2_gizle", true); ?>">
                        <div class="single-left-opt">
                            <div class="col-md-5 col-sm-5 col-xs-5 no-padding">
                                <div class="Aciklama_Resim no-padding">
                                    <img src="<?php echo get_post_meta($post->ID, "Aciklama_Resim_Sol2", true); ?>">
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-7">
                                <div class="Aciklama_Baslik">
                                    <?php echo get_post_meta($post->ID, "Aciklama_Baslik_Sol2", true); ?>
                                </div>
                                <div class="Aciklama">
                                    <?php echo get_post_meta($post->ID, "Aciklama_Sol2", true); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single no-padding" style="margin-top:20px; display:<?php echo get_post_meta($post->ID, "AciklamaSag2_gizle", true); ?>">
                            <div class="single-right-opt">
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                    <div class="Aciklama_Baslik">
                                        <?php echo get_post_meta($post->ID, "Aciklama_Baslik_Sag2", true); ?>
                                    </div>
                                    <div class="Aciklama">
                                        <?php echo get_post_meta($post->ID, "Aciklama_Sag2", true); ?>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5 no-padding">
                                    <div class="Aciklama_Resim no-padding">
                                        <img src="<?php echo get_post_meta($post->ID, "Aciklama_Resim_Sag2", true); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single no-padding" style="display:<?php echo get_post_meta($post->ID, "AciklamaSol3_gizle", true); ?>">
                        <div class="single-left-opt">
                            <div class="col-md-5 col-sm-5 col-xs-5 no-padding">
                                <div class="Aciklama_Resim no-padding" style="display:<?php echo get_post_meta($post->ID, "gizle", true); ?>">
                                    <img src="<?php echo get_post_meta($post->ID, "Aciklama_Resim_Sol3", true); ?>">
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-7">
                                <div class="Aciklama_Baslik">
                                    <?php echo get_post_meta($post->ID, "Aciklama_Baslik_Sol3", true); ?>
                                </div>
                                <div class="Aciklama">
                                    <?php echo get_post_meta($post->ID, "Aciklama_Sol3", true); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="single no-padding" style="margin-top:20px; display:<?php echo get_post_meta($post->ID, "AciklamaSag3_gizle", true); ?>">
                            <div class="single-right-opt">
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                    <div class="Aciklama_Baslik">
                                        <?php echo get_post_meta($post->ID, "Aciklama_Baslik_Sag3", true); ?>
                                    </div>
                                    <div class="Aciklama">
                                        <?php echo get_post_meta($post->ID, "Aciklama_Sag3", true); ?>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5 no-padding">
                                    <div class="Aciklama_Resim no-padding">
                                        <img src="<?php echo get_post_meta($post->ID, "Aciklama_Resim_Sag3", true); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>