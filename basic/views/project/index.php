<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'project_name',
            'project_detials:ntext',

            [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete} {new}',
            'buttons' => [
                'new' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-paperclip"></span>', $url, [
                        'title' => Yii::t('yii', 'New'),
                        'data-pjax' => '0',
                        ]);
                },
            ],
            ],
        ],
    ]); ?>

    <?= Tabs::widget([
    'encodeLabels' => false,
    'items' => [
        [
            'label'=>'<i class="glyphicon glyphicon-tasks"></i> Tasks',
            'content' => GridView::widget([
                            'dataProvider' => $dataProvider2,
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
