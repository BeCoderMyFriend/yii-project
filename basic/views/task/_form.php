<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Users;
use app\models\Project;
use yii\jui\DatePicker;
use kartik\time\TimePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); 
    $users = ArrayHelper::map(Users::find()->all(), 'id', 'username');
    $projects = ArrayHelper::map(Project::find()->all(), 'id', 'project_name');
    ?>

    <?= $form->field($model, 'task_name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'task_period')->widget(TimePicker::classname(), ['addonOptions' => ['asButton' => true, 'buttonOptions' => ['class' => 'btn btn-info']],
                                                                              'pluginOptions' => ['defaultTime' => 'current', 'minuteStep' => 1,'showMeridian' => false],]); ?>

    <?= $form->field($model, 'task_start')->widget(DatePicker::className(),['language' => 'en', 'dateFormat' => 'yyyy-MM-dd', 
                                                                            'options' => ['showOn' => 'button', 'buttonImage' => '/images/calendar.png', 'buttonImageOnly' => true]]) ?>

    <?= $form->field($model, 'task_end')->widget(DatePicker::className(),['language' => 'en', 'dateFormat' => 'yyyy-MM-dd']) ?>

    <?= $form->field($model, 'project_id')->dropDownList($projects) ?>

    <?= $form->field($model, 'user_id')->dropDownList($users) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-primary'])?>  
    </div>

    <?php ActiveForm::end(); ?>

</div>
