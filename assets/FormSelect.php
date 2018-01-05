<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class FormSelect extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/form-select.min.css',
    ];

    public $js = [
        'js/components/form-select.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}