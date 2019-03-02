<?php
add_action( 'init', 'theme_menus' );
function theme_menus() {
	register_nav_menus(
		array(
			'wpmenu1' => __( 'Başlangıç Menüsü' ),
			'wpmenu2' => __( 'Üst Menü' )
		)
	);
}

function kisa_baslik($char) {
         $title = get_the_title($post->ID);
         $title = substr($title,0,$char);
         echo $title;
}

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 50, true );
register_sidebars(1, array('name'=>'Sidebar'));
add_theme_support( 'post-thumbnails' );
add_image_size( 'anasayfa', 130, 160, true );
add_image_size( 'icsayfa', 610 , 302, true );



function page($pages = '', $range = 3)
{
	$showitems = ($range * 2)+1;
	global $paged;
	if(empty($paged)) $paged = 1;
	if($pages == '')
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}
	if(1 != $pages)
	{
		echo "<div class='wp-home-pages'>";
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&laquo;</a>";
		for ($i=1; $i <= $pages; $i++)
		{
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
				echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
			}
		}
		if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&raquo;</a>";
		echo "</div>\n";
	}
}
function sidebar_baslik($char) {
         $shorttitle = get_the_title($post->ID);
         $shorttitle = substr($shorttitle,0,$char);
         echo $shorttitle;
}

function kategori_ismi($ayirici = ' ') { //$ayirici the_category() fonksiyonunda da var
	$kategoriler = (array) get_the_category(); //kategorileri çağıralım

	$liste = '';
	foreach($kategoriler as $kategori) {    // herbiri icin düzeltelim
		$liste .= $ayirici . $kategori->category_nicename; //linksiz halde seo uyumlu "slug" versiyonu çağıralım
	}
	echo $liste; //yazdıralım
}
function wp_populer_yazilar($postID) {
	$count_key = wpb_post_views_count;
	$count = get_post_meta($postID, $count_key, true);
	if($count==""){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, 0);
	}else{
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
	


function getPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 Kez Okundu";
	}
	return $count.'';
}
function setPostViews($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	}else{
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
function resmi_getir() {
global $post, $posts; /* Tarayacağımız alanı belirliyoruz*/
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0]; /* Üstte filtrelediğimiz metinden url'yi çekiyoruz */
 
if(empty($first_img)){ /*Eğer konuda görsel yoksa aşağıdaki varsayılan görseli kullan*/
$first_img = "thumbnail-yok.jpg";
}
return $first_img;
}


// Yorum Listeleme Özelliği
function sinyor_comment($comment, $args, $depth) { $GLOBALS['comment'] = $comment; ?>
<?php $PostAuthor = false; if($comment->comment_author_email == get_the_author_email()) {
$PostAuthor = true;}
elseif($comment->comment_author_email == 'mailadresiniz@mail.com') {
$PostAuthor = true;}
?>
<li <?php if($PostAuthor) {echo "class='authorcomment' ";} ?> id="li-yorum-<?php comment_ID() ?>">
	<div class="comment">
		<div class="commentuser">
			<!-- Yorum Avatar -->
			<div class="commentavatar">
				<?php echo get_avatar($comment,$size='54'); ?>
			</div>
			<!-- #Yorum Avatar -->
			<!-- Kullanıcı Adı ve Tarih -->
			<h3><?php printf(__('%s'), get_comment_author()) ?></h3>
			<div class="commentdate">
				<i class="commentdateicon"></i><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(get_comment_date()); ?></a> <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(get_comment_time()); ?></a>
			</div>
			<!-- #Kullanıcı Adı ve Tarih -->
		</div>
		<?php if ($comment->comment_approved == '0') : ?>
			<em class="commentconfirmation">Yorumunuz onaylandıktan sonra görüntülenecektir.</em>
		<?php endif; ?>
		<div class="commentwrite"><?php comment_text() ?></div>
		<div class="reply">
			<i class="replyicon"></i><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
	</div>
	<?php }
?>
<?php
function wpn_content_limit($content, $ilimit = false)
{
$limit = ($ilimit) ? $ilimit : 10;
$pad="[…]";
$content = strip_tags($content);
if(strlen($content) > $limit)
{
$content = substr($content,0,$limit);
}
echo $content.$pad;
}
?>
