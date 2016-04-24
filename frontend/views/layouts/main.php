<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use frontend\models\SearchForm;

AppAsset::register($this);

$action = Yii::$app->controller->action->id;

$model = new SearchForm();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="<?= Url::to('@web/')?>faviconka_movie.ico" type="image/x-icon" />
</head>
<body>
<?php $this->beginBody() ?>       
    <header>
        <nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?=Yii::$app->homeUrl?>">MovieNews.tv</a>
                </div>  
                <div class="collapse navbar-collapse" id="navigation-navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="/site/index"<?php if ($action == "index") { ?>class="active"<?php } ?>>Главная</a></li>
                        <li><a href="/movies/movie"<?php if ($action == "movie") { ?>class="active"<?php } ?>>Фильми</a></li>
                        <li><a href="/serials/tv-series"<?php if ($action == "tv-series") { ?>class="active"<?php } ?>>Сериалы</a></li>
                        <li><a href="/news/post"<?php if ($action == "post") { ?>class="active"<?php } ?>>Новости</a></li>
                    </ul>

                    <?php $form = ActiveForm::begin(['options' => ['class' => 'navbar-form navbar-left']]); ?>
                        <div class="search-group">
                            <?= $form->field($model, 'q')->textInput(['class' => 'form-control',
                                                                    'placeholder' => 'Поиск'])->label('') ?>
                            <button type="submit" name="q" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    <?php ActiveForm::end(); ?>
                   
                    <ul class="nav navbar-nav navbar-right ">
                       <?php if (Yii::$app->user->isGuest) {?>
                            <li><a href="/site/login"<?php if ($action == "login") { ?>class="active"<?php } ?>>Войти</a></li>
                            <li><a href="/site/signup"<?php if ($action == "signup") { ?>class="active"<?php } ?>>Регистрация</a></li> 
                            <?php }else{?>
                            <li><p><?= Yii::$app->user->identity->username?></p></li>
                            <li><a href="/site/logout" data-method="post">Выйти</a></li>
                       <?php }?>
                        
                    </ul>
                    
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </header>
    <div class="container" style="background-color: #fff; min-height: 1000px;">
        <div class="row">
            <?= $content ?>
            <div class="col-md-3 sidebar">
                <div class="header-sidebar">Ми в соцсетях</div>
                <div class="social-sidebar">
                    <div class="social-info">
                        <p class="text-left">Добавляйтесь к нам в друзья в <strong>ВКонтакте</strong>! Отзывы о сайте и пожелание оставляйте на стене.</p>
                        <img src="<?= Url::to('@web/images/')?>icon_vk.png" alt="Наша группа" />
                        <a href="http://vk.com/onlinekinoteatr" target="_blank" class="btn btn-primary">Наша группа</a>
                    </div>
                    <div class="social-info">
                        <p class="text-left">Добавляйтесь к нам в друзья в <strong>Одноклассники</strong>! Отзывы о сайте и пожелание оставляйте на стене.</p>
                        <img src="<?= Url::to('@web/images/')?>icon_od.png" alt="Наша группа" />
                        <a href="https://ok.ru/centpart" class="btn btn-warning" target="_blank">Наша группа</a>
                    </div>
                    <div class="social-info">
                        <p class="text-left">Добавляйтесь к нам в друзья в <strong>Facebook</strong>! Отзывы о сайте и пожелание оставляйте на стене.</p>
                        <img src="<?= Url::to('@web/images/')?>icon_f.png" alt="Наша группа" />
                        <a href="https://www.facebook.com/okino.ua/" class="btn btn-primary" target="_blank">Наша группа</a>
                    </div>
                </div>
                <div class="header-sidebar">Информация</div>
                <div class="site-rules">
                    <p>Пожалуйста, внимательно ознакомьтесь с общими положениями и правилами нашего сайта.</p>
                    <a href="/site/post-rules" class="btn btn-success">Правила сайта</a>
                </div>
                <div class="header-sidebar">Цитаты</div>
                <div class="quote">
                    <p>В фильме должно быть начало, середина и конец, - но не обязательно именно в этом порядке. Как и в жизни.</p>
                    <p class="text-right"><em>Жан-Люк Годар</em></p><hr />
                    <p>Три главные составные части фильма: сценарий, сценарий и еще раз сценарий.</p>
                    <p class="text-right"><em>Стивен Спилберг</em></p><hr />
                    <p>Фильм должен начинаться с землетрясения, а потом напряжение должно нарастать.</p>
                    <p class="text-right"><em>Алфред Хичкок</em></p>
                </div>
            </div>
        </div>
    </div>
    <div class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <ul class="footer-list">
                            <li><b>В СОЦСЕТЯХ</b></li>
                            <li><a href="http://vk.com/onlinekinoteatr" target="_blank">ВКонтакте</a></li>
                            <li><a href="https://ok.ru/centpart" target="_blank">Одноклассники</a></li>
                            <li><a href="https://www.facebook.com/okino.ua/" target="_blank">Facebook</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="footer-list">
                            <li><b>Информация</b></li>
                            <li><a href="#">Пожелания</a></li>
                            <li><a href="/site/post-rules">Правила</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">                  
                        <ul class="footer-list">
                            <li><b>MovieNews</b></li>
                            <li>movienews@gmail.com</li>
                            <li>Copyright &copy; <?= date('Y') ?> MovieNews</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>  
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
