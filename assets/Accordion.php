<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class Accordion extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/accordion.min.css',
    ];

    public $js = [
        'js/components/accordion.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}