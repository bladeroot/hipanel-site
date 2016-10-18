<?php

use hipanel\site\FaqAsset;
use hipanel\site\widgets\Faq;

FaqAsset::register($this);

$this->title = Yii::t('hipanel:site:faq', 'FAQ');
$this->blocks['subTitle'] = Yii::t('hipanel:site:faq', 'Find answers to the common questions asked about our services')

?>

<?= Yii::$app->menuManager->faq->render([
    'class' => Faq::class,
]) ?>
