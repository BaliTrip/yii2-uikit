<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class Lightbox extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        
    ];

    public $js = [
        'js/components/lightbox.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}