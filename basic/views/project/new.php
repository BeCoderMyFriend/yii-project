<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Users;
use app\models\Project;
use yii\jui\DatePicker;
use kartik\time\TimePicker;
use yii\bootstrap\ActiveField;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model app\models\Task */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Create Task for ' . $model->project_name . " project";
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); 
    $users = ArrayHelper::map(Users::find()->all(), 'id', 'username');
    $model2->project_id = $model->id; 
    ?>

    <?= $form->field($model2, 'task_name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model2, 'task_period')->widget(TimePicker::classname(), ['addonOptions' => ['asButton' => true, 'buttonOptions' => ['class' => 'btn btn-info']],
                                                                              'pluginOptions' => ['defaultTime' => 'current', 'minuteStep' => 1,'showMeridian' => false],]);?>

    <?= $form->field($model2, 'task_start')->widget(DatePicker::className(),['class' => 'form-control', 'language' => 'en', 'dateFormat' => 'yyyy-MM-dd',
                                                                             'options' => ['showOn' => 'button', 'buttonImage' => Yii::$app->basePath.'http://localhost/basic/web/images/calendar.png', 'buttonImageOnly' => true]]) ?>

    <?= $form->field($model2, 'task_end', ['template' => '{label}<div class="input-group">{input}<span class="input-group-btn "><button class="btn btn-default" type="button"><i class="glyphicon glyphicon-calendar"></i></button></span></div>',
    ])->widget(DatePicker::className(),['class' => 'form-control','language' => 'en', 'dateFormat' => 'yyyy-MM-dd']) ?>

    <?= Html::activeHiddenInput($model2, 'project_id') ?>

    <?= $form->field($model2, 'user_id')->dropDownList($users) ?>

    <div class="form-group">
        <?= Html::submitButton($model2->isNewRecord ? 'Create' : 'Update', ['class' => $model2->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
  		<?= Html::resetButton('Reset', ['class' => 'btn btn-primary'])?><?= Html::img('/images/calendar.png') ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
