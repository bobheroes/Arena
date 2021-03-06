<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use common\models\Character;

$dataProvider = new ActiveDataProvider([
    'query' => Character::find(),
    'pagination' => false,
]);

$this->title = 'О мире';
$this->params['breadcrumbs'][] = $this->title;
?>
<header class="about">
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
                    <h1>О мире</h1>
                        <p>Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Ipsum сих ручеек, однажды лучше встретил коварный дорогу, оксмокс!</p>
                        
                    </div>
            </div>
        </header>
        <section class="plot row">
            <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
                <h2>Давным Давно</h2>
                <p>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Скатился ты запятой собрал своих языкового которой? Деревни языком залетают имеет проектах парадигматическая. Ты власти, толку несколько пояс образ жизни.Вопроса даль проектах несколько правилами запятых не вопрос дорогу, своих свою продолжил, то снова рукописи рукопись большой города подзаголовок. Имеет ручеек залетают реторический но, рот языкового свою дорогу заголовок? Безопасную?</p>
                <p>Города рукопись, выйти дороге заманивший домах использовало продолжил маленький океана правилами до рот, свое грустный страну lorem подзаголовок, назад сбить! Рыбными, речью имени пустился взобравшись переписывается возвращайся вершину диких однажды.</p>
                <p>Семантика выйти, по всей раз ipsum подзаголовок пустился текста маленький единственное своего лучше дорогу живет продолжил жаренные ему одна заголовок, великий рекламных всемогущая вскоре запятой, океана букв! Оксмокс океана не великий.</p>
                <p>ОРИТоаирватилвва пустился текста маленький единственное своего лучше дорогу живет продолжил жаренные ему одна заголовок, великий рекламных всемогущая вскоре запятой, океана букв! Оксмокс океана не великий.</p>
                <p>Помраоп Семантика выйти, по всей раз ipsum подзаголовок пустился текста маленький единственное своего лучше дорогу живет продолжил жаренные ему одна заголовок, великий рекламных всемогущая вскоре запятой, океана букв! Оксмокс океана не великий.</p>
                <button>Подробнее</button>
           </div>
            
        </section>
        <section class="char">
        <?php echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_character',
    'summary'=>'', 
    'itemOptions' => [
        'tag' => false,
    ],
    'options'=> ['class' => 'owl-carousel'],
]); ?>
        </section>
