<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
<?php $this->beginBody() ?>
<div class="secondary_menu"></div>
<div class="banner"></div>
<div class="primary_menu">
	<div class="menu_links">
		<ul>
			<li><a href="#">Avaleht</a></li>
			<li><a href="#">Uudised</a></li>
			<li><a href="#">Galerii</a></li>
			<li><a href="#">Üritused</a></li>
			<li><a href="#">Koor</a></li>
			<li><a href="#">Rahvatants</a></li>
			<li><a href="#">Seltsist</a></li>			
		</ul>
		<nav id="my-menu">
			<ul>
			  <li><a href="#">Avaleht</a></li>
			  <li><a href="#">Uudised</a></li>
			  <li><a href="#">Galerii</a></li>
			  <li><a href="#">Üritused</a></li>
			  <li><a href="#">Koor</a></li>
			  <li><a href="#">Rahvatants</a></li>
			  <li><a href="#">Seltsist</a></li>
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
	<h2>Seltsist</h2>
	<p>Londoni Eesti Selts asutati 7. juulil 1921. aastal ja on seega vanim siiani tegutsev eestlaste organisatsioon Inglismaal.  Londoni Eesti Selts (LES) on ka maailmas vanim jätkuvalt tegutsev välis-eesti organisatsioon.  Inglismaal oli Selts ainsaks eestlaste seltskondlikuks organisatsiooniks kuni 1947. aastani.  Selle ajani oli Seltsi eesmärgiks ühendada kõiki eestlasi Suurbritannias ning luua sidemeid kaasmaalastega ka muudes maailma osades.  Ka peale Inglismaa Eestlaste Ühingu (IEÜ) asutamist püsis põhimõte, et vanima eestlaste organisatsioonina koondab LES enda umber üle kogu Inglismaa kõiki neid eestlasi kelle läheduses ei ole IEÜ osakondi ja kes endise aja tava kohaselt soovivad kuuluda Seltsi.</p>
	<p>LES’i eesmärkideks võeti juba algusest eestlaste kokkuhoidmine ja omavahelise läbikäimise organiseerimine rahvuslikus ja sõbralikus koostöö vaimus. 1954. aastal kinnitatud Põhikirjast alates on LES’i peaeesmärgiks “Eesti isesisvust säilitada ja innustada Londonis ja Londoni ümbruses elavaid eestlasi ja Eesti sõpru rahvusliku kultuuri eripära säilitama, edasi arendama ja tutvustama teistele rahvastele.” Kauaaegne LES’i esimees ülempreester Nigul Hindo kirjutab, et Seltsi ülesandeks on läbi aastate olnud soov luua eesti vaimulaadile meelepärast keskust ning võimaldada Londoni suurlinnas kõigile eestlastele omavahelist kokkusaamist ning sobivat setskondlikku meelelahutust ja mõistlikku ajaviidet ühiste koosviibimiste näol laulu ja mängu kaasabil. Läbi aegade on LES ka püüdnud pakkuda külalislahkust ja kaaseestlastega kohtamise võimalusi, seda eriti lühiajaliselt Londonit külastavatele eestlastele. Oma üritustega on LES pakkunud meelelahutust Londoni eesti kogukonnale.</p>
	<p>LESi raames toimivad hetkel filmi- ja ajalootoimkond, raamatukogu ja segakoor.</p>
	<p>Seltsi juhatuse esimees on Evelin Siilak. Juhatusse kuuluvad Tiia Avastu, Allan Reinsalu ja Aet Annist.</p>
	<p>Londoni Eesti Seltsi ajaloo kohta loe lähemalt <a href="#">siit.</a></p>
<!--GALLERY PLUGIN STRUCTURE-->
	<div class="gallery">
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
	</div>

<!--GALLERY PLUGIN STRUCTURE ENDS-->


<!--NEWS SECTION-->
	
<!--NEWS SECTION ENDS-->
</div>

<div class="footer"></div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
