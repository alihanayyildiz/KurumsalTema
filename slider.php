<!--< ?php                   
$number = 0;                                   // Eğer Slider' içerisinde bir kategoriden yazı çekecekseniz bu alanın başındaki <!-- ve sonundaki - -> ifadelerini kaldırın  
query_posts('showposts=5&cat=3');
if(have_posts()):
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    < ?php while(have_posts()): the_post(); ?>
        <li data-target="#myCarousel" data-slide-to="< ?php echo $number++; ?>"></li>
    < ?php endwhile; ?>
  </ol>

  <div class="carousel-inner">
    < ?php while(have_posts()): the_post(); ?>
    <div class="item">                                // Eğer Slider' içerisinde bir kategoriden yazı çekecekseniz bu alanın başındaki <!-- ve sonundaki - -> ifadelerini kaldırın
     < ?php the_post_thumbnail( 'full' );?>
    </div>
    < ?php endwhile; ?>
-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
        <li data-target="#myCarousel"></li>
        <li data-target="#myCarousel"></li><!--Alt alandaki yuvarlak slider geçiş kutularını arttırmak için kullanabilirsiniz -->
        <li data-target="#myCarousel"></li>
        <li data-target="#myCarousel"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item"> <!--Yeni Slider Resmi Eklemek İçin Bu Dibi </div> alanına kadar Kopyala yapıştır işlemi yaparak çoğaltıp resim adresini değiştirebilirsiniz-->
         <img src="https://i2.wp.com/jackeurope.com/wp-content/uploads/2018/08/Jackfamily.jpg?fit=1480%2C411&ssl=1" alt="">     
    </div>
    <div class="item">
      <img src="https://i2.wp.com/jackeurope.com/wp-content/uploads/2016/08/slider2400px.jpg?fit=1440%2C400&ssl=1" alt="">
    </div>
    <div class="item">
      <img src="https://i0.wp.com/jackeurope.com/wp-content/uploads/2015/11/slider3.gif?fit=1440%2C500&ssl=1" alt="">
    </div>
    <div class="item">
      <img src="https://i1.wp.com/jackeurope.com/wp-content/uploads/2015/11/slider4.jpg" alt="">
    </div>



  </div>
  
  <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="background:transparent !important; margin-left:-5%; ">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next" style="background:transparent !important; margin-right:-5% ">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--< ?php endif; wp_reset_query(); ?>-->

<script>
jQuery(document).ready(function(){
$(".carousel-indicators li:first").addClass("active");
$(".carousel-inner .item:first").addClass("active");
});
</script>