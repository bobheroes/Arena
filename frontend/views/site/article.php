<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title =  Html::encode($model->title);
$this->params['breadcrumbs'][] = $this->title;
?>

<header class="article">
<nav>
    <ul>
         <li><a href="<?=Url::toRoute(['site/index'])?>">Главная</a></li>
         <li><a href="<?=Url::toRoute(['site/about'])?>">О мире</a></li>
         <li><img src="img/logo.png" alt="logo"></li>
         <li><a href="<?=Url::toRoute(['site/news'])?>">Новости</a></li>
         <li><a href="<?=Url::toRoute(['site/contact'])?>">Контакты</a></li>
    </ul>
</nav>
        <div class="row">
            <div class="col-xs-offset-1 col-sm-8 col-xs-10 title">
				<h1><?= Html::encode($model->title) ?></h1>
					<p><?= Html::encode($model->date) ?></p>
			</div>
        </div>
    </header>
    <section class="article row">
        <article class="col-xs-12 col-sm-10 col-sm-offset-1">
                <img src="<?= Html::encode($model->profile_pic) ?>" alt="article_img">
                <?= Html::encode($model->articles) ?>
        </article>
    </section>