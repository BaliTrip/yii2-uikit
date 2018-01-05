<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class GridParallax extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        
    ];

    public $js = [
        'js/components/grid-parallax.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}