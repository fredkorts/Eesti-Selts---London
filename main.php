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
			 slidingSubmenus: false,
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
<div class="secondary_menu"></div>
<div class="banner"></div>
<div class="primary_menu">
	<div class="menu_links">
		<ul>
			<?php 
			foreach($menus as $m) {
				echo '<li>'.Html::a($m->name, Url::to(['menu/'.$m->id.'/'.$m->getSafeName()]),['class' => 'btn']).'</li>';
			}
			?>
			  <?php 
			  if(Yii::$app->user->can('admin')) {
						echo '<li><a href="/index.php/admin">Admin</a></li>
							  <li><a href="/index.php/user/security/login">Logi välja</a></li>';
					} else {
						echo '<li><a href="/index.php/user/security/login">Logi sisse</a></li>';
					} ?>
		</ul>
		<nav id="my-menu">
			<ul>
			  
			<?php 
			foreach($menus as $m) {
				echo '<li>'.Html::a($m->name, Url::to(['menu/'.$m->id.'/'.$m->getSafeName()]),['class' => 'btn']).'</li>';
			}
			?>
			  <?php if(Yii::$app->user->can('admin')) {
						echo '<li><a href="/index.php/admin">Admin</a></li>
							  <li><a href="/index.php/user/security/login">Logi välja</a></li>';
					} else {
						echo '<li><a href="/index.php/user/security/login">Logi sisse</a></li>';
					}?>
			  <li><a href="/index.php/user/security/login">Logi sisse</a></li>
			</ul>
		</nav>
	</div>
<a href="#my-menu" class="menu_button"><img src="/img/menu.png"></a>
</div>
<div class="box_slider">
	<ul class="bxslider">
	  <li><h1>........Test #1</h1></li>
	  <li><h1>........Test #2</h1></li>
	  <li><h1>........Test #3</h1></li>
	  <li><h1>........Test #4</h1></li>
	</ul>
</div>
<div class="container">
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
	
<!--NEWS SECTION ENDS-->
</div>

<div class="footer"></div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
