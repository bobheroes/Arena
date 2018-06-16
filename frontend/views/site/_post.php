<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>


<figure class="effect-goliath">
    <img src="<?= Html::encode($model->profile_pic) ?>" alt="img24">
    <figcaption>
        <h2><?= Html::encode($model->title) ?></h2>
        <p class="date"><?= Html::encode($model->date) ?></p>
        <p><?= Html::encode($model->anons) ?></p>
        <?= Html::a('', ['article', 'id' => $model->id]) ?>
    </figcaption>			
</figure>