<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Tabs;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = "Project " . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tasks', ['new', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'project_name',
            'project_detials:ntext',
        ],
    ]) ?>

    <?= Tabs::widget([
    'encodeLabels' => false,
    'items' => [
        [
            'label'=>'<i class="glyphicon glyphicon-tasks"></i> Tasks',
            'content' => GridView::widget([
                            'dataProvider' => $dataProvider,
                            'columns' => [
                                [
                                    'class' => 'yii\grid\SerialColumn'
                                ],

                                    'task_name',
                                    'task_start',
                                    'task_end',
                                    'task_period',

                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'controller' => 'task',
                                ],
                            ],
                        ]), 
            'active' => true,
        ],
        [
            'label' => '<i class="glyphicon glyphicon-file"></i >Files', 
            'content' => 'Add Files',
        ],
    ],
    ]); ?>

</div>
