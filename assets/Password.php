<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class Password extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/form-password.min.css',
    ];

    public $js = [
        'js/components/form-password.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}