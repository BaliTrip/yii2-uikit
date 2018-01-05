<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class Slideset extends AssetBundle
{
     public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/slidenav.min.css',
        'css/components/dotnav.min.css',
    ];

    public $js = [
        'js/components/slideset.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}