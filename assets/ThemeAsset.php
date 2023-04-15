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
        'css/app.css',
        'css/fonts.css',
    ];

    public $js = [
        'js/app.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];


}
