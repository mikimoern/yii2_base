<?php
/* @var $this yii\web\View */

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
	<h3><?= $tv->serial_name ?></h3>
	<div class="one_tv">
		<div class="img-movie">
			<p><img src="<?= Url::to('@web/')?><?= $tv->serial_img?>" alt="<?= $tv->serial_name ?>" width="350px" height="500" /></p>
		</div>
		<div class="info-movie">
			<ul>
				<li><span>Жанр:</span> <?= $tv->serial_genre ?></li>
				<li><span>Период показа:</span> <?= $tv->serial_period ?></li>
				<li><span>Страна:</span> <?= $tv->serialCountry->country_name ?></li>
				<li><span>Режиссёр:</span> <?= $tv->serial_producer ?></li>
				<li><span>В ролях:</span> <?= $tv->serial_cast ?></li>
			</ul>
		</div>
		<div class="clear"></div>
		<h3>Описание</h3>
		<div class="description_movie">
			<?= $tv->serial_description ?><hr />
		</div>
		<h3>Трейлер</h3>
		<div class="movie-trailler">
			<iframe width="560" height="315" src="<?= $tv->serialTrailler->trailler_link ?>" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>