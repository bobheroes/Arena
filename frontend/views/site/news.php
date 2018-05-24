<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

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
    <article class="row">
        <figure  class="col-sm-4 col-sm-offset-1">
            <img src="./img/news1.jpg" alt="news img">
        </figure>
        <div class="col-md-4 col-sm-6 ">
            <h2>Заголовок новости</h2>
            <span class="date">10.10.2017</span>
            <p>Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты. Рукопись безопасную текста сбить одна то послушавшись обеспечивает, повстречался приставка.</p>
            <a href="#">Читать дальше</a>
        </div>
</article>
<article class="row">
        <figure  class="col-sm-4 col-sm-offset-1">
            <img src="./img/news1.jpg" alt="news img">
        </figure>
        <div class="col-md-4 col-sm-6 ">
            <h2>Заголовок новости</h2>
            <span class="date">10.10.2017</span>
            <p>Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты. Рукопись безопасную текста сбить одна то послушавшись обеспечивает, повстречался приставка.</p>
            <a href="#">Читать дальше</a>
        </div>
</article>
<article class="row">
        <figure  class="col-sm-4 col-sm-offset-1">
            <img src="./img/news1.jpg" alt="news img">
        </figure>
        <div class="col-md-4 col-sm-6 ">
            <h2>Заголовок новости</h2>
            <span class="date">10.10.2017</span>
            <p>Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты. Рукопись безопасную текста сбить одна то послушавшись обеспечивает, повстречался приставка.</p>
            <a href="#">Читать дальше</a>
        </div>
</article>
    <ul class="pagination">
        <li><a href="#" class="fas fa-arrow-left" ></a></li>
        <li><a href="#" class="active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">...</a></li>
        <li><a href="#">15</a></li>
        <li><a href="#" class="fas fa-arrow-right"></a></li>
    </ul>

</section>