<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Steam of Magic';
?>
<header class="main">
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
					<input type="button" value="Скачать игру">
				</div>
        </div>
    </header>
    <section class="game row">
        <figure class="col-sm-5"><img src="./img/man.png" alt="man"></figure>
        <div class="col-sm-5 col-xs-10 col-xs-offset-1">
                <h2 >Погрузись в фантастический мир темного фэнтези</h2>
                <p >Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Имени рукопись проектах первую большой текстов деревни продолжил от всех своего меня которой они вопрос коварных текст грустный, своих последний одна.</p>
        </div>
    </section>
    <section class="latest row">
            <div class="col-xs-offset-1 col-sm-5 col-xs-10">
                    <h3><?= Html::encode($model->title) ?></h3>
                        <p><?= Html::encode($model->anons) ?></p>
                        <input type="button" value="Все новости" onclick="location.href='<?=Url::toRoute(['site/news'])?>';">

                    </div>
        <figure class="col-sm-5"><img src="./img/kristall.png" alt="kristall"></figure>
    </section>
