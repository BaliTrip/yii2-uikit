<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class DinamicGrid extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        
    ];

    public $js = [
        'js/components/grid.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}