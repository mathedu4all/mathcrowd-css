<?php

namespace app\assets;
use yii\web\AssetBundle;
use yii\web\View;
class MathJaxAsset extends AssetBundle
{
    public $sourcePath = '@vendor/mathjax/mathjax';
    public $js = [
        'es5/tex-svg-full.js'
    ];
    public $jsOptions = [
        'position'=> View::POS_HEAD
    ];

    public $depends = [
        'app\assets\AppAsset',
    ];
}
