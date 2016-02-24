<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;

//echo Url::to(['page/index']);
//echo Url::to(['menu/index']);
?>

<ul>
	<li><?= Html::a('Artiklid', Url::to(['page/index']),['class' => 'btn']) ?></li>
	<li><?= Html::a('Menüüd', Url::to(['menu/index']),['class' => 'btn']) ?></li>
</ul>