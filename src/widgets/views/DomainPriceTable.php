<?php
use yii\helpers\Html;

/** @var $domainZones array */
/** @var $domains array */

?>
<table id="tld-table" class="tablesaw" data-tablesaw-mode="stack">
    <thead>
    <tr>
        <th><?= Yii::t('hisite', 'Domain sones') ?></th>
        <th><?= Yii::t('hisite', 'Registration') ?></th>
        <th><?= Yii::t('hisite', 'Renewal') ?></th>
        <th><?= Yii::t('hisite', 'Transfer') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($domains)) : ?>
        <?php foreach ($domainZones as $zone) : ?>
            <?php $hide = false;
            foreach ($domains['zone:.' . $zone] as $v) if (floatval($v['price']) == 0) $hide = true; ?>
            <?php if (!$hide) : ?>
                <tr>
                    <td><?= Html::tag('span', $zone, ['class' => '']) ?></td>
                    <td>
                        <b><?= Yii::$app->formatter->asCurrency($domains['zone:.' . $zone]['dregistration']['price'], 'usd') ?></b>
                        / <?= Yii::t('hisite', 'year') ?></td>
                    <td><?= Yii::$app->formatter->asCurrency($domains['zone:.' . $zone]['drenewal']['price'], 'usd') ?>
                        / <?= Yii::t('hisite', 'year') ?></td>
                    <td>
                        <b><?= Yii::$app->formatter->asCurrency($domains['zone:.' . $zone]['dtransfer']['price'], 'usd') ?></b>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach ?>
    <?php endif; ?>
    </tbody>
</table>