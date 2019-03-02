<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title('', true, 'right');?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="<?php echo get_option('my_seo_keywords');?>">
    <meta name="description" content="<?php echo get_option('my_seo_description');?>">
    <link rel = "kısayol simgesi" href = "/img/favicon.ico"  type = "image / x-icon" > 
    <link rel = "icon" href = "/img/favicon.ico"  type = "image / x-icon" >   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"><link rel="icon" href="<?php echo get_option('my_favicon');?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/reset.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
    <script src="<?php bloginfo('template_url') ?>/main/menu.js"></script>
    <script src="<?php bloginfo('template_url') ?>/main/jquery.js"></script>
    <script src="<?php bloginfo('template_url') ?>/main/jquery-1.2.6.pack.js"></script>
</head>
<body>
<div class="top-head">
    <div class="container">
        <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="flag">
                        <!-- GTranslate: https://gtranslate.io/ -->
                        <a href="#" onclick="doGTranslate('en|pl');return false;" title="Polish" class="glink nturl notranslate"><img src="//localhost:81/wordpress/wp-content/plugins/gtranslate/flags/24/pl.png" height="14" width="17" alt="Polish" />&nbsp;&nbsp;&nbsp;</a>
                        <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="glink nturl notranslate"><img src="//localhost:81/wordpress/wp-content/plugins/gtranslate/flags/24/en.png" height="14" width="17" alt="English" />&nbsp;&nbsp;&nbsp;</a>
                        <a href="#" onclick="doGTranslate('en|be');return false;" title="Belarusian" class="glink nturl notranslate"><img src="//localhost:81/wordpress/wp-content/plugins/gtranslate/flags/24/be.png" height="14" width="17" alt="Belarusian" />&nbsp;&nbsp;&nbsp;</a>
                        <style type="text/css">
                        #goog-gt-tt {display:none !important;}
                        .goog-te-banner-frame {display:none !important;}
                        .goog-te-menu-value:hover {text-decoration:none !important;}
                        .goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}
                        body {top:0 !important;}
                        #google_translate_element2 {display:none!important;}
                         </style>
                        <div id="google_translate_element2"></div>
                        <script type="text/javascript">
                        function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
                        </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
                        <script type="text/javascript">
                        function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
                        function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
                        function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(/goog-te-combo/.test(sel[i].className)){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
                        </script>
                        <!--<a href="http://fibertema.com/JackThemes/Bel">
                            <img src="< ?php bloginfo('template_url');?>/img/belarusian.png">
                        </a>
                        <a href="http://fibertema.com/JackThemes/Bel">
                            <img src="< ?php bloginfo('template_url');?>/img/english.png">
                        </a>
                        <a href="http://fibertema.com/JackThemes/Bel">
                            <img src="< ?php bloginfo('template_url');?>/img/polish.png">
                        </a>-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="top-menu">
                        <a href="http://localhost:81/wordpress/about/">ABOUT</a>  |
                        <a href="http://localhost:81/wordpress/contact/">CONTACT</a>
                    </div>
                </div>
                <div class="col-md-1 col-md-offset-6 col-sm-7 col-xs-12 no-padding">
                    <div class="social-media">    
                        <a href="https://www.facebook.com/JackNo1Europe/" target="_blank">
                            <i class="fab fa-facebook-f" style="padding:15px 7px;"></i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <div class="header" id="myHeader" style="z-index:2 !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="logo" style="z-index:1;">
                            <a href="<?php bloginfo('url');?>">
                                <?php
                                if (get_option('yp_logo')=='') {
                                echo '<img src="'; bloginfo('template_url');  echo '/img/logo.png" width="100%" height="100%" alt="Logo"/>';
                                }
                                else {
                                echo '<img src="'.get_option('yp_logo'). '" width="100%" height="100%" alt="Logo"/> ';
                                }
                                ?>
                                </a>
                                </div>
                        </div>
                        <nav>
                            <div>                            
                                <i class="fa fa-bars" style="color:#fff; margin-top:25px;"></i>
                            </div>                    
                            <?php wp_nav_menu(array('theme_location' => 'wpmenu1', 'container' => '')); ?>                                            
                        </nav>                    
                    <script type="text/javascript">
                    $("nav div").click(function() {
                            $("ul").slideToggle();
                            $("ul ul").css("display", "none");
                    });
                    $("ul li").click(function() {
                            $("ul ul").slideUp();
                            $(this).find('ul').slideToggle();
                    });
                    $(window).resize(function() {
                            if($(window).width() > 768) {
                                $("ul").removeAttr('style');
                            }
                    });
                    </script>
                    <ul class="nav" style="z-index:1;">
                    <li>
                    <li class="button-dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle"  style="background:transparent;">
                        <span class="fas fa-search"></span>
                        </a>
                        <ul class="dropdown-menu">
                        <li>
                        <div class="wrap">
                        <div class="search">
                            <form role="search" method="get" id="searchTerm" action='<?php echo home_url( '/' ); ?>'>
                            <input type="text" class="searchTerm" name="s" id="s" placeholder="Search..." required>
                            <button type="submit" class="searchButton" id="searchTerm">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    </div>
                    </li>
                    </ul>
                    </li>
                    </ul>
                </div>            
            </div>
        </div>
    </div>
</div>
</div>
      <script>
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}</script>