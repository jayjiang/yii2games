<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2017-03-15 21:16
 */

namespace feehi\assets;

class PjaxAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/yii2-pjax';

    public $js = [
        'jquery.pjax.js',
    ];

    public $depends = [
        'feehi\assets\YiiAsset',
    ];
}
