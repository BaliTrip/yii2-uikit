<?php

namespace balitrip\uikit\assets;

use yii\web\AssetBundle;

class Datepicker extends AssetBundle
{
    public $sourcePath = '@balitrip/uikit/uikit';

    public $css = [
        'css/components/datepicker.min.css',
    ];

    public $js = [
        'js/components/datepicker.min.js',
    ];

    public $depends = [
        'balitrip\uikit\UikitAsset',
    ];
}