<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
?>
<div class="site-signup">
    
    <header class="main">
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
                <?php $form = ActiveForm::begin(['id' => 'form-signup', 'class' =>'col-xs-12']); ?>
                <h1><?= Html::encode($this->title) ?></h1>
<?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'Имя администратора'])->label(false) ?>

<?= $form->field($model, 'email')->textinput(['type'=>'email','placeholder'=>'Email'])->label(false) ?>

<?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Пароль'])->label(false) ?>

<div class="form-group">
    <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
</div>

<?php ActiveForm::end(); ?>
                </div>
    </header>
