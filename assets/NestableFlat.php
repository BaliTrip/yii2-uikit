<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class NestableFlat extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/nestable.almost-flat.min.css',
    ];

    public $js = [
        'js/components/nestable.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}