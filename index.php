<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',TRUE);

// 分离common模块
define('COMMON_PATH','./Common/');

// 自动绑定(自动生成)产品某块,使用完代码需要注释？否则报错
// define("BIND_MODULE","Good");
// define('BUILD_CONTROLLER_LIST','Good');
// define('BUILD_MODEL_LIST','Good');

// 定义应用目录
define('APP_PATH','./Application/');

// 定义公共资源的路径
define('PUBLIC_PATH', './Public/');

//定义根目录
//define('__ROOT__', __DIR__.DIRECTORY_SEPARATOR);

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单