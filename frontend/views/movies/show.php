<?php
/* @var $this yii\web\View */

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
	<h3><?= $tv->movie_name ?></h3>
	<div class="one_tv">
		<div class="img-movie">
			<p><img src="<?= Url::to('@web/')?><?= $tv->movie_img?>" alt="<?= $tv->movie_name ?>" width="350px" height="500" /></p>
		</div>
		<div class="info-movie">
			<ul>
				<li><span>Жанр:</span> <?= $tv->movie_genre ?></li>
				<li><span>Год:</span> <?= $tv->movie_year ?></li>
				<li><span>Страна:</span> <?= $tv->movieCountry->country_name ?></li>
				<li><span>Режиссёр:</span> <?= $tv->movie_manager ?></li>
				<li><span>Сценарий:</span> <?= $tv->movie_scenario ?></li>
				<li><span>Продюсер:</span> <?= $tv->movie_producer ?></li>
				<li><span>В ролях:</span> <?= $tv->movie_cast ?></li>
			</ul>
		</div>
		<div class="clear"></div>
		<h3>Описание</h3>
		<div class="description_movie">
			<?= $tv->movie_description ?><hr />
		</div>
		<h3>Трейлер</h3>
		<div class="movie-trailler">
			<iframe width="560" height="315" src="<?= $tv->movieTrailler->trailler_link ?>" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>