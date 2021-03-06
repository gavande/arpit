<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FindCollections */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Collections';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collections-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Collections', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'account_id',
            'month',
            'year',
            'inst_month',
            // 'receive_date',
            // 'ispaid',
            // 'field1',
            // 'field2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
