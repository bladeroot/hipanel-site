<?php

namespace hipanel\site\menus;

use hipanel\widgets\Gravatar;
use hiqdev\yii2\cart\widgets\CartTeaser;
use hiqdev\yii2\language\widgets\LanguageMenu;
use Yii;

class NavbarMenu extends \hiqdev\menumanager\Menu
{
    protected $_addTo = 'navbar';

    public $hipanelUrl;

    public function items()
    {
        return [
            [
                'label' => '<i class="fa fa-user"></i>&nbsp;' . Yii::$app->user->identity->username,
                'encode' => false,
                'visible' => !Yii::$app->user->isGuest,
            ],
            [
                'label' => LanguageMenu::widget(),
                'encode' => false,
                'options' => [
                    'class' => 'dropdown language-menu',
                ]
            ],
            [
                'label' => CartTeaser::widget(),
                'encode' => false,
                'options' => [
                    'class' => 'dropdown notifications-menu notifications-cart'
                ]
            ],
            [
                'label' => Yii::t('hipanel:site', 'Login'),
                'url' => ['/site/login'],
                'visible' => Yii::$app->user->isGuest,
            ],
            [
                'label' => Yii::t('hipanel:site', 'Panel'),
                'url' => $this->hipanelUrl,
                'visible' => !Yii::$app->user->isGuest,
            ],
            [
                'label' => Yii::t('hipanel:site', 'Logout'),
                'url' => ['/site/logout'],
                'visible' => !Yii::$app->user->isGuest,
                'encode' => false,
            ],
        ];
    }

    private function getGravatar()
    {
        $out = '';
        $email = @Yii::$app->user->identity->email;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $out = Gravatar::widget([
                'size' => 18,
                'email' => $email,
                'options' => [
                    'alt' => Yii::$app->user->identity->username,
                ],
            ]);
        }

        return $out;
    }
}
