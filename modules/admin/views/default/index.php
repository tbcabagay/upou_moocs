<?php

/* @var $this yii\web\View */

$this->title = 'Admimistrator Log-in';
$this->params['brandLabel'] = $this->title;
?>
<div class="admin-default-index">
    <?= yii\authclient\widgets\AuthChoice::widget([
         'baseAuthUrl' => ['default/auth'],
         'popupMode' => false,
    ]) ?>
</div>
