<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use yii\helpers\Url;

$this->title = 'Новости';

$this->registerMetaTag([
    'name'=>'keywords',
    'content'=>'movienews, сериалы, кино, лучшие сериалы, лучшие фильмы'
]);

$this->registerMetaTag([
    'name'=>'description',
    'content'=>'MovieNews.TV. Все о сериалах и фильмах.'
]);

?>
<div class="col-md-9 content">
	<h3>Новости сериалов</h3>
	<?php foreach ($posts as $post): ?>
		<div class="content-post">
			<div class="article-img">
				<img src="<?= Url::to('@web/')?><?= $post->news_img?>" height="75" width="150" alt="" />
			</div>
			<div class="article-text">
				<h4><?= $post->news_title ?></h4>
				<p class="text-justify"><?= $post->news_description ?></p>
				<a class="btn btn-success btn-sm more-info" href="/news/article/<?= $post->news_id ?>">Подробнее...</a>
			</div>
			<div class="clear"></div>
			<div class="article-info">
				<ul class="list-inline">
					<li>Дата: <?= $post->news_date ?></li>
				</ul>
			</div>
		</div>
	<?php endforeach?>
	<div class="col-md-9 col-md-offset-5 pagination-bootsrap">
		<?= LinkPager::widget(['pagination' => $pagination]) ?>
	</div>
</div>