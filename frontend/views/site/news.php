<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use common\models\Post;

$dataProvider = new ActiveDataProvider([
    'query' => Post::find(),
    'pagination' => [
        'pageSize' => 4,
    ],
]);

$this->title = 'Новости';
?>

<header class="news">
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
            <div class="col-xs-offset-1 col-sm-4 col-xs-10">
				<h2>Супер привлекающий текст
						от которого потекут</h2>
					<p>Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Ipsum сих ручеек, однажды лучше встретил коварный дорогу, оксмокс образ вопроса гор большого маленькая живет домах ее запятой силуэт свой!</p>
				</div>
        </div>
    </header>

    
<section class="news">
    <<?php echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_post',
    'summary'=>'', 
    'pager' => [
        'pagination'=> [
   
            
        ]
],
    
]); ?>
</section>