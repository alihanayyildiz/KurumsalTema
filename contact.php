<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<script>
    $(document).ready(function(){
      $("#alanim div").hide();
      $("#alanim span").toggle(function(){
        var index = $("#alanim span").index(this);
        $("#alanim div:eq("+index+")").slideDown("slow");
        $(this).css("background-color","#fff");}, 
      function(){
        var index = $("#alanim span").index(this);
        $("#alanim div:eq("+index+")").slideUp("slow");
        $(this).css("background-color","#fff");
      });
    });

    $(document).ready(function(){
      $("#alanalt div").hide();
      $("#alanalt span").toggle(function(){
        var index = $("#alanalt span").index(this);
        $("#alanalt div:eq("+index+")").slideDown("slow");
        $(this).css("background-color","#fff");}, 
      function(){
        var index = $("#alanalt span").index(this);
        $("#alanalt div:eq("+index+")").slideUp("slow");
        $(this).css("background-color","#fff");
      });
    });
</script>
<div class="kapla" style="min-height:100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="alanim">
                        <span><a href="#"><i class="fas fa-plus-square"></i>DOUSA</a></span>
                        <div class="icerik1">
                        ul. Pomorska 15/17<br>
                        20-216 Wrocław<br>
                        tel: 71 328 73 66<br>
                        <a href="www.maszynydousa.pl">www.maszynydousa.pl</a>
                        </div>
                        <span><a href="#"><i class="fas fa-plus-square"></i>KRÓLMASZ</a></span>
                        <div class="icerik2">
                            ul. Ukryta 4<br>
                            95-100 Słowik<br>
                            tel: 501 288 750<br>
                            <a href="www.maszynyszwalniczelodz.pl">www.maszynyszwalniczelodz.pl</a>
                        </div>
                        <span><a href="#"><i class="fas fa-plus-square"></i>KUROPATWA</a></span>
                        <div class="icerik3">
                            ul. Konstytucji 3-Maja 34<br>
                            95-035 Ozorków<br>
                            tel: 42 718-95-57<br>
                            <a href="www.dlaszwalni.pl">www.dlaszwalni.pl</a>
                        </div>
                        <span><a href="#"><i class="fas fa-plus-square"></i>OLI</a></span>
                        <div class="icerik4">
                            ul. Mieszka I 17<br>
                            Hanusek, 42-690 Tworóg<br>
                            tel: 880 110 024
                        </div>
                        <span><a href="#"><i class="fas fa-plus-square"></i>PRECYZJA</a></span>
                        <div class="icerik5">
                            ul. Henryka Sienkiewicza 23<br>
                            63-800 Gostyń<br>
                            tel: 606 830 613
                        </div>
                    </div>
                    <div id="alanalt">
                        <span><a href="#"><i class="fas fa-plus-square"></i>SEMACO</a></span>
                        <div class="icerik6">
                        Os. Szkolne 19a<br>
                        31-977 Kraków<br>
                        tel: 12 643 25 88<br>
                        <a href="www.semaco.com.pl">www.semaco.com.pl</a>
                        </div>
                        <span><a href="#"><i class="fas fa-plus-square"></i>SMS</a></span>
                        <div class="icerik7">
                            Ul. Boczna 3<br>
                            95-100 Zgierz<br>
                            tel: 606 275 687<br>
                            <a href="www.smsmaszyny.pl">www.smsmaszyny.pl</a>
                        </div>
                        <span><a href="#"><i class="fas fa-plus-square"></i>SZWALMASZ</a></span>
                        <div class="icerik8">
                            Ul. Zbąszyńska 4<br>
                            91-342 Łódź<br>
                            tel: 42 636-36-12<br>
                            <a href="www.szwalmasz.com.pl">www.szwalmasz.com.pl</a>
                        </div>
                        <span><a href="#"><i class="fas fa-plus-square"></i>WOŹNIAK</a></span>
                        <div class="icerik9">
                            Rynek Podgórski 7<br>
                            31-518 Kraków<br>
                            tel: 12 423 51 30<br>
                            <a href="www.m-szwalnicze.pl">www.m-szwalnicze.pl</a>
                        </div>
                        <span><a href="#"><i class="fas fa-plus-square"></i>ZIELIŃSKI</a></span>
                        <div class="icerik10">
                            ul. Króla Stanisława Augusta 50<br>
                            35-210 Rzeszów<br>
                            tel: 602 759 886
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d770809.0860158126!2d28.45174621544522!3d41.003964328513874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1538868957668" width="100%" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12" style="padding-left:40px;">
                    <div class="comments-opt">
                        <div class="contact_logo">
                            <img src="<?php bloginfo('template_url');?>/img/Jack-logo-3.png" width="100%" height="100%" alt="Logo"/>
                        </div>
                        <div class="contact_logo_bottom_title">
                            <strong>ZNAJDŹ NAJBLIŻSZY PUNKT NA MAPIE LUB SKONTAKTUJ SIĘ Z NAMI ZA POMOCĄ FORMULARZA</strong>
                        </div>
                    </div>
                    <div class="contact-form">
                            <!--İletişim Formu Kodu-->
                            <?php echo do_shortcode('[contact-form-7 id="87" title="İletişim formu 1"]');?>
                    </div>
                </div>
        </div>
    </div>  
</div>

<?php get_footer(); ?>