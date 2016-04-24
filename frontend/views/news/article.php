<?php

/* @var $this yii\web\View */
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
	<h3><?= $post->news_title ?></h3>
	<div class="one_news">
		 <div class="img-news">
			 <p><img src="<?= Url::to('@web/')?><?= $post->news_img?>" alt="<?= $post->news_title ?>" width="420px" height="263" /></p>
		 </div>
		 <?= $post->news_full_text ?>
		 <p class="time-news">Дата: <?= $post->news_date ?></p>
		<h3>Коментарии</h3>
		<!-- Put this script tag to the <head> of your page -->
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

		<script type="text/javascript">
		  VK.init({apiId: 5432524, onlyWidgets: true});
		</script>

		<!-- Put this div tag to the place, where the Comments block will be -->
		<div id="vk_comments"></div>
		<script type="text/javascript">
		VK.Widgets.Comments("vk_comments", {limit: 10, width: "610", attach: "*"});
		</script>
	</div>
</div>