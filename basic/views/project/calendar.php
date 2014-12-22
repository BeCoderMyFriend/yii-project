<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects Tasks Calendar';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel='stylesheet' href='/basic/vendor/bower/jquery-ui/themes/dark-hive/jquery-ui.css' />
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= \talma\widgets\FullCalendar::widget([
    'googleCalendar' => true,  // If the plugin displays a Google Calendar. Default false
    'loading' => 'Carregando...', // Text for loading alert. Default 'Loading...'
    'config' => [
        // put your options and callbacks here
        // see http://arshaw.com/fullcalendar/docs/
        'lang' => 'en', // optional, if empty get app language
        'firstDay' => '1',
        'header' => [
        	'left' => 'today prev,next',
        	'center' => 'title',
        	'right' => 'month,agendaWeek,agendaDay',
        ],
        'events' =>$items,
        'timeFormat' => 'h(:mm)t',
        'editable' => true,
        'theme' => true,
        ],
    ]); ?>
</div>