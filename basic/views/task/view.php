<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Users;
use app\models\Project;

/* @var $this yii\web\View */
/* @var $model app\models\Task */

$this->title = "Task Info";
$this->params['breadcrumbs'][] = ['label' => 'Project ' . $model->project_id, 
                                  'url' => ['/project/view', 'id' => $model->project_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->task_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->task_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'task_name',
            'task_start',
            'task_end',
            'task_period',
            [
                'label' => 'Project Name',
                'value' => Project::find()->where(['id' => $model->project_id])->one()->project_name,
            ],
            [
                'label' => 'Username',
                'value' => Users::find()->where(['id' => $model->user_id])->one()->username,
            ],
        ],
    ]) ?>


</div>
