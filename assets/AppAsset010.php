<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset010 extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template/css/style.css',
        'ssets/css/fontawesome.css',
        'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css',
    ];
    public $js = [       
        'https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist',
        'template/vendors/js/glightbox.min.js',
        'template/js/bootstrap.bundle.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
