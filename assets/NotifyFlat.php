<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class NotifyFlat extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/notify.almost-flat.min.css',
    ];

    public $js = [
        'js/components/notify.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}