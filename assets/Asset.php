<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
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
