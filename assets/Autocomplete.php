<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class Autocomplete extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/autocomplete.min.css',
    ];

    public $js = [
        'js/components/autocomplete.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}