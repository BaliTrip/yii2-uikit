<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class Tooltip extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/tooltip.min.css',
    ];

    public $js = [
        'js/components/tooltip.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}