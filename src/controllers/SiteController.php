<?php

namespace hipanel\site\controllers;

use hipanel\modules\domain\cart\DomainRegistrationProduct;
use hipanel\modules\finance\models\Tariff;
use hipanel\modules\server\helpers\ServerHelper;
use hipanel\modules\server\cart\ServerOrderProduct;
use hipanel\site\models\Thread;
use hiqdev\yii2\cart\actions\AddToCartAction;
use hisite\actions\RenderAction;

class SiteController extends \hipanel\controllers\SiteController
{
    public function actions()
    {
        return array_merge(parent::actions(), [
            'index' => [
                'class' => RenderAction::class,
            ],
            'vds' => [
                'class' => RenderAction::class,
                'data' => function () {
                    $xenPackages = ServerHelper::getAvailablePackages(Tariff::TYPE_XEN);
                    $openvzPackages = ServerHelper::getAvailablePackages(Tariff::TYPE_OPENVZ);

                    return [
                        'xenPackages' => $xenPackages,
                        'openvzPackages' => $openvzPackages,
                    ];
                }
            ],
            'terms-and-conditions' => [
                'class' => RenderAction::class,
            ],
            'add-to-cart-registration' => [
                'class' => AddToCartAction::class,
                'productClass' => DomainRegistrationProduct::class,
            ],
            'add-to-cart' => [
                'class' => AddToCartAction::class,
                'productClass' => ServerOrderProduct::class
            ]
        ]);
    }

    public function actionOrder($id)
    {
        $package = ServerHelper::getAvailablePackages(null, $id);
        $osImages = ServerHelper::getOsimages($package->tariff->type);

        return $this->render('order', [
            'package' => $package,
            'product' => new ServerOrderProduct(['tariff_id' => $package->tariff->id]),
            'groupedOsimages' => ServerHelper::groupOsimages($osImages),
            'panels' => ServerHelper::getPanels(),
        ]);
    }

    public function actionContact()
    {
        $thread = new Thread();
        $thread->scenario = Thread::SCENARIO_SUBMIT;

        return $this->render('contact', [
            'thread' => $thread,
        ]);
    }
}
