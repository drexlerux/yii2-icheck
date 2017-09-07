<?php

namespace drexlerux\ui;

use yii\web\AssetBundle;

class ICheckAsset extends AssetBundle
{
    public $sourcePath = '@bower/icheck';

    public $js = [
        'icheck.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
