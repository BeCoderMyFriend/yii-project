<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NumbersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Numbers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="numbers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Numbers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'start_date',
            'expire_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
