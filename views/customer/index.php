<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="customer-index">
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= Html::encode($this->title) ?> Data management</h3>
              <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            </div>

            <div class="box-body">
            <p>
                <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?php Pjax::begin(); ?>    <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        '_id',
                        'name',
                        'email',
                        'address',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            <?php Pjax::end(); ?>
            </div><!-- .box-body -->
        </div><!-- .box -->
    </div><!-- .col-xs-12 -->
</div><!-- .row -->
</div>