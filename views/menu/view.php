<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Page;

/* @var $this yii\web\View */
/* @var $model app\models\Menu */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-view">
	
	<?php $pages = Page::find()->where(['=', 'subthread_in', $model->id])->all();
		foreach($pages as $p) {
			echo '<h2>'.$p->title.'</h2>';
			echo '<div>'.html_entity_decode($p->content).'</div>';
		}
	?>

</div>
