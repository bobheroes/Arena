<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use common\models\Team;

$dataProvider = new ActiveDataProvider([
    'query' => Team::find(),
    'pagination' => false,
]);


$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<header class="contact">
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
            <div class="col-xs-offset-1 col-sm-6 col-xs-10">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
            <h1 class="box">Обратная связь</h1>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true,'placeholder'=>'Имя'])->label(false) ?>

                <?= $form->field($model, 'email')->textinput(['type'=>'email','placeholder'=>'Email'])->label(false) ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 9, 'placeholder'=>'Ваш фидбэк'])->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            </div>
            
            <div class="col-sm-4 col-md-offset-1 address">
                <h6 class="box">Далеко-далеко.</h6>
                <h2 class="box">Далеко-далеко за, словесными горами в стране гласных</h2>
                <h6 class="box">Далеко-далеко.</h6>
                <h2 class="box">Далеко-далеко за, словесными </h2>
                <h6 class="box">Далеко-далеко.</h6>
                <h2 class="box">Далеко-далеко за</h2>
            </div>
        </div>
    </header>
    <section class="team">
    <?php echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_team',
    'summary'=>'', 
    'options'=> ['class' => 'owl-carousel'],
]); ?>
    </section>
