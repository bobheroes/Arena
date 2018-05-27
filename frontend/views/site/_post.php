<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
    
<article class="row">
    <figure  class="col-sm-4 col-sm-offset-1">
        <img src="./img/news1.jpg" alt="news img">
    </figure>
    <div class="col-md-4 col-sm-6 ">
        <h2><?= Html::encode($model->title) ?></h2>
        <span class="date"><?= Html::encode($model->date) ?></span>
        <p><?= Html::encode($model->anons) ?></p>
        <?= Html::a('Читать далее', ['article', 'id' => $model->id]) ?>
    </div>
</article>
