<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class Sticky extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/sticky.min.css',
    ];

    public $js = [
        'js/components/sticky.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}