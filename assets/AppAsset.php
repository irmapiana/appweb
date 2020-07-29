<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/main.css',
        // 'css/screen.css',
        'css/jquery.treeview.css',
        // 'css/default/style.css',
        // 'css/default/style.min.css'
    ];
    public $js = [
        'js/jstree.js',
        'js/jstree.min.js',
        'js/newjs/demo.js',
        'js/newjs/jquery.cookie.js',
        'js/newjs/jquery.treeview.async.js',
        'js/newjs/jquery.treeview.js',
        'js/newjs/jquery.treeview.sortable.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
