<?php
/* @var $this yii\web\View */

use yii\widgets\LinkPager;
use yii\helpers\Url;

$this->title = 'Сериалы';

$this->registerMetaTag([
    'name'=>'keywords',
    'content'=>'movienews, сериалы, лучшие сериалы'
]);

$this->registerMetaTag([
    'name'=>'description',
    'content'=>'MovieNews.TV. Все о сериалах и фильмах.'
]);

?>
<div class="col-md-9 content">
	<h3>Сериалы</h3>
	<?php foreach ($tv_series as $tv): ?>
		<div class="col-md-3 movie">
			<a href="/serials/show/<?= $tv->serial_id ?>"><img src="<?= Url::to('@web/')?><?= $tv->serial_img?>" height="235" width="160" alt="" ></a>
			<a href="/serials/show/<?= $tv->serial_id ?>" class="movie_title"><?= $tv->serial_name ?></a>
		</div>
	<?php endforeach?>
	<div class="col-md-9 col-md-offset-5 pagination-bootsrap">
		<?= LinkPager::widget(['pagination' => $pagination]) ?>
	</div>
</div>
