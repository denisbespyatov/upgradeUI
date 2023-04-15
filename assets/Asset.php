<?php

/**
 * @copyright Copyright (c) 2023 denisbespyatov
 * @license https://github.com/denisbespyatov/upgradeui/blob/master/LICENSE
 * @link https://upgradeui.denisbespyatov.ru
 * @link https://github.com/denisbespyatov/upgradeui
 */

namespace denisbespyatov\upgradeui\assets;

use yii\web\AssetBundle;

class Asset extends \yii\web\AssetBundle
{

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
        'denisbespyatov\upgradeui\assets\ThemeAsset',
    ];

    public $sourcePath = '@denisbespyatov/upgradeui/assets/scr';

}
