<?php
/* @var $this yii\web\View */

use yii\widgets\LinkPager;
use yii\helpers\Url;

$this->title = 'Фильми';

$this->registerMetaTag([
    'name'=>'keywords',
    'content'=>'movienews, кино, лучшие фильмы'
]);

$this->registerMetaTag([
    'name'=>'description',
    'content'=>'MovieNews.TV. Все о сериалах и фильмах.'
]);

?>
<div class="col-md-9 content">
	<h3>Фильми</h3>
	<?php foreach ($movies as $tv): ?>
		<div class="col-md-3 movie">
			<a href="/movies/show/<?= $tv->movie_id ?>"><img src="<?= Url::to('@web/')?><?= $tv->movie_img?>" height="235" width="160" alt="" ></a>
			<a href="/movies/show/<?= $tv->movie_id ?>" class="movie_title"><?= $tv->movie_name ?></a>
		</div>
	<?php endforeach?>
	<div class="col-md-9 col-md-offset-5 pagination-bootsrap">
		<?= LinkPager::widget(['pagination' => $pagination]) ?>
	</div>
</div>
