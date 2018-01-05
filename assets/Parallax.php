<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class Parallax extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        
    ];

    public $js = [
        'js/components/parallax.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}