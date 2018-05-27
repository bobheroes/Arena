<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
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
<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>
</header>