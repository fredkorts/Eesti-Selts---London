<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Menu;
use app\models\Page;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
	<meta name="front-end author" content="Fred Korts">
	<meta name="back-end author" content="Caupo Helvik">
    <title>Eesti Selts - London</title>
	<!--BASIC CSS-->
	<link rel="stylesheet" href="/css/style.css"/>
	<!--BASIC JQUERY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!--GALLERY PLUGIN JS FILE-->
	<script src="/js/jquery.swipebox.js" type="text/javascript"></script>
	<script src="/js/tinymce/tinymce.min.js" type="text/javascript"></script>
	<script>tinymce.init({
		  selector: "textarea",  // change this value according to your HTML
		  plugins: ["link", "image", "code", "table"],
		});
	</script>

	<!--GLYPHICON LINK-->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<!--MOBILE MENU JQUERY-->	
	<script src="/js/jquery.mmenu.all.min.js" type="text/javascript"></script>
	<!--BOX SLIDER JQUERY-->	
	<script src="/js/jquery.bxslider.min.js" type="text/javascript"></script>
	<!--MOBILE MENU CSS-->
	<link rel="stylesheet" href="/css/jquery.mmenu.all.css"/>
	<!--BOX SLIDER CSS-->
	<link rel="stylesheet" href="/css/jquery.bxslider.css"/>
	<!--MGALLERY PLUGIN CSS-->
	<link rel="stylesheet" href="/css/swipebox.css"/>
    <?php $this->head() ?>
	<!--SCRIPT FOR MOBILE MENU-->
	<script type="text/javascript">
	   $(document).ready(function() {
		  $("#my-menu").mmenu({
			 slidingSubmenus: true,
			 extensions: ["theme-dark"]
		  });
	   });
	</script>
	<script type="text/javascript">
	;( function( $ ) {

		$( '.swipebox' ).swipebox({
			loopAtEnd: true
		});

	} )( jQuery );
	</script>
	<script>
		$(document).ready(function(){
		  $('.bxslider').bxSlider();
		});
	</script>
</head>
<body>
<?php 
$this->beginBody();
$menus = Menu::find()->all();
?>
<div class="banner">
	<div class="logo"><img src="/img/logo.png"></div>
	<div class="mob_button"><a href="#my-menu" class="menu_button"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a></div>
	<div style="clear: both;"></div>
</div>
<!--
<div class="primary_menu">
	<div class="menu_links">
		<ul>
			<?php 
			foreach($menus as $m) {
				echo '<li>'.Html::a($m->name, Url::to(['menu/'.$m->id.'/'.$m->getSafeName()]),['class' => 'btn']).'</li>';
			}
			?>
		</ul>
		<nav id="my-menu">
			<ul>
			  
			<?php 
			foreach($menus as $m) {
				echo '<li>'.Html::a($m->name, Url::to(['menu/'.$m->id.'/'.$m->getSafeName()]),['class' => 'btn']).'</li>';
			}
			?>
			</ul>
		</nav>
	</div>
</div>
-->
<div class="primary_menu">
	<div class="menu_links">
		<ul>
			<li class="dropdown"><a href="/index.php/menu/1/avaleht">Avaleht</a>
				<ul class="meie_dropdown">
					<li><a href="#">Filmiõhtu 22.11.11.</a></li>
					<li><a href="#">Manchano galerii kutsub 2015</a></li>
					<li><a href="#">Test1234567</a></li>
					<li><a href="#">Test12345678</a></li>
					<li><a href="#">Test123456789</a></li>
					<li><a href="#">Test12345 678910</a></li>
				</ul>
			</li>
			<li><a href="/index.php/menu/3/galerii">Galerii</a></li>
			<li><a href="/index.php/menu/4/ritused">Üritused</a></li>
			<li><a href="/index.php/menu/5/koor">Koor</a></li>
			<li><a href="/index.php/menu/6/rahvatants">Rahvatants</a></li>
			<li><a href="/index.php/menu/7/seltsist">Seltsist</a></li>
		</ul>
		<nav id="my-menu">
			<ul>
				<li><a href="/index.php/menu/1/avaleht">Avaleht</a>
					<ul>
						<li><a href="#">Test1</a></li>
						<li><a href="#">Test12</a></li>
						<li><a href="#">Test123</a></li>
						<li><a href="#">Test1234</a></li>
					</ul>
				</li>
				<li><a href="/index.php/menu/3/galerii">Galerii</a></li>
				<li><a href="/index.php/menu/4/ritused">Üritused</a></li>
				<li><a href="/index.php/menu/5/koor">Koor</a></li>
				<li><a href="/index.php/menu/6/rahvatants">Rahvatants</a></li>
				<li><a href="/index.php/menu/7/seltsist">Seltsist</a></li>
			</ul>
		</nav>
	</div>
</div>

<div class="box_slider">
	<ul class="bxslider">
	  <li class="slider_background" id="bkg_01" style="background:url('/img/cover_1.jpg');background-size:cover;"><div class="slider_txt_bl"><h1>Lorem ipsum dolor sit amet</h1></div></li>
	  <li class="slider_background" id="bkg_02" style="background:url('http://www.tlu.ee/~eslas/Fotod/Panoraam.jpg');background-size:cover;"><div class="slider_txt_br"><h1>Lorem ipsum dolor sit amet</h1></div></li>
	  <li class="slider_background" id="bkg_03" style="background:url('http://www.evelinp.planet.ee/wp-content/gallery/panoraam/panorama-39.jpg');background-size:cover;"><div class="slider_txt_tl"><h1>Lorem ipsum dolor sit amet</h1></div></li>
	  <li class="slider_background" id="bkg_04" style="background:url('http://www.pohjala.ee/~elvin/Panoraam/slides/20090201_Vanalinn_PR2.jpg');background-size:cover;"><div class="slider_txt_tr"><h1>Lorem ipsum dolor sit amet</h1></div></li>
	  <li class="slider_background" id="bkg_01" style="background:url('http://www.andrus.ee/images/20090215182117_tallinna%20pano.jpg');background-size:cover;"><div class="slider_txt_center"><h1>Lorem ipsum dolor sit amet</h1></div></li>
	</ul>
</div>
<div class="container">
<div class="hidden_area">
<?php 
if(Yii::$app->user->can('admin')) {
	echo '<div class="hidden_admin"><a href="/index.php/admin">Admin</a></div>
		  <div class="hidden_login"><a href="/index.php/user/security/login">Logi välja</a></div>';
	} 
	else 
	{
		echo '<div class="hidden_login"><a href="/index.php/user/security/login">Logi sisse</a></div>';
	}
?>
</div>
	<?php echo $content; ?>
<!--GALLERY PLUGIN STRUCTURE-->
	<?php /*<div class="gallery">
		<h2>Galerii näidis</h2>
		<ul>
			<li>
				<a href="/img/img1.jpg" class="swipebox" title="My Caption">
					<img src="/img/img1.jpg" alt="image">
				</a>
			</li>
			<li>
				<a href="/img/img2.jpg" class="swipebox" title="My Caption">
					<img src="/img/img2.jpg" alt="image">
				</a>
			</li>
			<li>
				<a href="/img/img3.jpg" class="swipebox" title="My Caption">
					<img src="/img/img3.jpg" alt="image">
				</a>
			</li>
			<li>
				<a href="/img/img4.jpg" class="swipebox" title="My Caption">
					<img src="/img/img4.jpg" alt="image">
				</a>
			</li>
			<li>
				<a href="/img/img5.jpg" class="swipebox" title="My Caption">
					<img src="/img/img5.jpg" alt="image">
				</a>
			</li>
		</ul>
	</div>*/
	?>

<!--GALLERY PLUGIN STRUCTURE ENDS-->
<!--NEWS SECTION-->
<div class="article">
<div class="article_header">Article header</div>
<div class="article_date">21.02.2016</div>
<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
<p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
<p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p>
</div>
<div class="article">
<div class="article_header">Article header</div>
<div class="article_date">21.02.2016</div>
<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
<p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
<p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p>
</div>
<div class="article">
<div class="article_header">Article header</div>
<div class="article_date">21.02.2016</div>
<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
<p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
<p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p>
</div>
<!--NEWS SECTION ENDS-->
</div>

<div class="footer">
	<div class="footer_content">
		<div class="sponsors">
			<div class="sponsors_header"><h2>Eesti Londoni Selts tänab sponsoreid.</h2></div>
			<ul>
				<li><a href="#"><img src="/footer/alecoq.png"></a></li>
				<li><a href="#"><img src="/footer/carrotCars.png"></a></li>
				<li><a href="#"><img src="/footer/estolink.jpg"></a></li>
				<li><a href="#"><img src="/footer/logo.gif"></a></li>
				<li><a href="#"><img src="/footer/Qbic_Hotels.png"></a></li>
				<li><a href="#"><img src="/footer/viru_beer.jpg"></a></li>
			</ul>
		</div>
		<div class="boilerplate">
			<ul>
				<li class="float_left">E-mail: <a href="mailto:info@londonieestiselts.co.uk?Subject=Hello%20again" target="_top">info@londonieestiselts.co.uk</a></li>
				<li class="float_right">Copyright © Zetabit OÜ</li>
			</ul>
		</div>
	</div>
</div>

<!--READMORE SCRIPT-->
<script src="/js/readmore.js"></script>
<!--READMORE ACTIVATION SCRIPT-->
<script>
	$('.article').readmore();
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
