<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class Upload extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/placeholder.min.css',
        'css/components/progress.min.css',
        'css/components/form-file.min.css',
    ];

    public $js = [
        'js/components/upload.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}