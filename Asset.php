<?php

namespace pauko\mashaMarker;

use yii\base\View;
use yii\web\AssetBundle;

/**
 * Widget asset bundle.
 */
class Asset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/pauko/masha';

    /**
     * @inheritdoc
     */
    public $js = [
        'src/js/masha.min.js',
        //'src/js/ierange.js'
    ];

    public $css = [
        'src/css/masha.css'
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
