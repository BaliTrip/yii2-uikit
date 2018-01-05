<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class Sortable extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/sortable.min.css',
    ];

    public $js = [
        'js/components/sortable.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}