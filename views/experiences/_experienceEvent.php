<?php

use yii\helpers\Html;
?>
<div class="row">
  <div class="col-sm-2">
    <i class="material-icons">book</i>
  </div>
  <div class="col-sm-10 ">
    <h3><?= Html::encode($event->title) ?></h3>
    <p class="gn-event-type text-right"><i class="material-icons">label_outline</i></p>
    <h4>
      <span class="gn-event-date"><?= Html::encode($event->date); ?></span>,
      <span class="gn-event-location"><?= Html::encode($event->location->name) ?></span>
    </h4>
    <p class="gn-event-description">
      <?= Html::encode($event->description); ?>
    </p>
  </div>
</div>
