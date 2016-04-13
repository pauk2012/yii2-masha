<?php

namespace pauko\mashaMarker;

use yii\base\View;
use yii\web\AssetBundle;

/**
 * Widget asset bundle.
 */
class AssetIE extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/pauko/masha';

    /**
     * @inheritdoc
     */
    public $js = [
        'src/js/ierange.js'
    ];



    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,
        'condition' => 'lte IE'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
