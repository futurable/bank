<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var \common\models\LoginForm $model
 */
$this->title = Yii::t('app', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="jumbotron">
        <h1><?= Html::encode($this->title) ?></h1>
        
        <div class="row">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <?= $form->field($model, 'username') ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>
    
                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'Login'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
