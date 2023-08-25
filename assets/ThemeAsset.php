<?php

/**
 * @copyright Copyright (c) 2023 denisbespyatov
 * @license https://github.com/denisbespyatov/upgradeui/blob/master/LICENSE
 * @link https://upgradeui.denisbespyatov.ru
 * @link https://github.com/denisbespyatov/upgradeui
 */

namespace denisbespyatov\upgradeui\assets;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@denisbespyatov/upgradeui/assets/scr';

    public $css = [
        YII_ENV !== 'prod' ? 'bs5/css/bootstrap.css' : 'bs5/css/bootstrap.min.css',
        'fonts/roboto/stylesheet.css',
        'fonts/bebas/stylesheet.css',
        'fonts/fa/stylesheet.css',
//        'vendor/jackocnr/intl-tel-input/build/css/intlTelInput.min.css',
        'css/app.css',
    ];

    public $js = [
        'bs5/js/bootstrap.bundle.min.js',
//        'vendor/jackocnr/intl-tel-input/build/js/intlTelInput-jquery.min.js',
        'js/app.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];


}
