<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Sistema de Apoio a Monitoria e Aproveitamento de Estudos';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1></h1>

        <p class="lead"></p>

        <p> <?= Html::a('Monitoria', ['/monitoria/index'], ['class'=>'btn btn-primary']) ?></p>
        <p> <?= Html::a('Aproveitamento de Estudos', ['/aproveitamento/index'], ['class'=>'btn btn-primary']) ?> </p>
        <p> <?= Html::a('Atualização de Dados Pessoais', ['/aluno/editardados'], ['class'=>'btn btn-primary']) ?></p>
    </div>
</div>
