<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class Search extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/search.min.css',
    ];

    public $js = [
        'js/components/search.min.js',
    ];

    public $depends = [
        'balitrip\uikit\assets\Autocomplete',
    ];
}