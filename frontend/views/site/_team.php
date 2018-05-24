<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
    
    <figure class="item row">
            <div class="col-sm-offset-2 col-sm-4">
                <h2><?= Html::encode($model->name) ?></h2>
                <h4><?= Html::encode($model->position) ?></h4>
                <p><?= Html::encode($model->info) ?></p>
                <a href="<?= Html::encode($model->link) ?>">Телеграм ми</a>
            </div>
            <div class="col-sm-offset-2 col-sm-4">
               <img src="<?= Html::encode($model->profile_pic) ?>" alt="l">
            </div>
        </figure>
