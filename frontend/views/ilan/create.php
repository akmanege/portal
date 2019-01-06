<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ilan */

$this->title = 'Create Ilan';
$this->params['breadcrumbs'][] = ['label' => 'Ilans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ilan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
