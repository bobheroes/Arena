<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

        <figure class="item row">
            <div class="col-sm-5  char_pic">
                <img src="<?= Html::encode($model->profile_pic) ?>" alt="character">
            </div>
            <div class="col-md-5 col-sm-6 col-sm-offset-1 char_desc">
                <h2><?= Html::encode($model->name) ?></h2>
                <?= HtmlPurifier::process($model->descript)?>
            </div>
        </figure>