<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
  //  public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'CSS/AdminLTE.min.css',
        'CSS/AdminLTE.css',
        'CSS/_all-skins.css',
    ];
    public $js = [
        // 'js/adminlte.min.js',
        // 'js/adminlte.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
         //'dmstr\adminlte\web\AdminLteAsset',
    ];
}
