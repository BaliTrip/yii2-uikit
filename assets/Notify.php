<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class Notify extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/notify.min.css',
    ];

    public $js = [
        'js/components/notify.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}