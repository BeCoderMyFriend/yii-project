<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Numbers */

$this->title = 'Create Numbers';
$this->params['breadcrumbs'][] = ['label' => 'Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="numbers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
