<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use common\models\Post;

$dataProvider = new ActiveDataProvider([
    'query' => Post::find(),
    'pagination' => false,
]);

$this->title = 'Новости';
?>

<header class="news">
<nav>
        <ul>
            <li><a href="<?=Url::toRoute(['site/index'])?>">Главная</a></li>
            <li><a href="<?=Url::toRoute(['site/about'])?>">О мире</a></li>
            <li><img src="img/logo.svg" alt="logo"></li>
            <li><a href="<?=Url::toRoute(['site/news'])?>">Новости</a></li>
            <li><a href="<?=Url::toRoute(['site/contact'])?>">Контакты</a></li>
        </ul>
    </nav>
    <div class="row">
                <div class="col-sm-offset-2 col-xs-offset-1  col-sm-5 col-xs-10">
                        <h1>Новости</h1>
                            <p>Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Ipsum сих ручеек, однажды лучше встретил коварный дорогу, оксмокс!</p>
                            
                        </div>
                </div>
        </div>
    </header>
<section class="news">
<h2>Последние новости</h2>
<div class="wrapper">
    <?php echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_post',
    'summary'=>'',     
]); ?>
</div>
</section>