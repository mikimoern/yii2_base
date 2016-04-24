<?php

/* @var $this yii\web\View */

$this->title = 'MovieNews.tv';

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
    <div class="content-carousel">
        <h3>Трейлеры</h3>
        <ul class="bxslider">
            <?php foreach ($traillers as $trailler): ?>
                <li>
                    <iframe width="560" height="315" src="<?= $trailler->trailler_link?>" frameborder="0" allowfullscreen></iframe>
                </li>
            <?php endforeach?>
        </ul>
    </div><hr />
    <h3>Новости сериалов</h3>
    <?php foreach ($model as $post): ?>
        <div class="content-post">
            <div class="article-img">
                <img src="../<?= $post->news_img?>" height="75" width="150" alt="" />
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
</div>
