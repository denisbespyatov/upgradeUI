<?php

/**
 * @copyright Copyright (c) 2023 denisbespyatov
 * @license https://github.com/denisbespyatov/upgradeui/blob/master/LICENSE
 * @link https://upgradeui.denisbespyatov.ru
 * @link https://github.com/denisbespyatov/upgradeui
 */

namespace denisbespyatov\upgradeui\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
