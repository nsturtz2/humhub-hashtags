<?php

namespace  sturtznetwork\humhub\modules\hashtags;

use Yii;
use yii\helpers\Url;

class Events
{
    /**
     * Defines what to do when the top menu is initialized.
     *
     * @param $event
     */
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Hashtags',
            'icon' => '<i class="fa fa-adjust"></i>',
            'url' => Url::to(['/hashtags/index']),
            'sortOrder' => 99999,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'hashtags' && Yii::$app->controller->id == 'index'),
        ]);
    }

    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param $event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Hashtags',
            'url' => Url::to(['/hashtags/admin']),
            'group' => 'manage',
            'icon' => '<i class="fa fa-adjust"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'hashtags' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 99999,
        ]);
    }
}
