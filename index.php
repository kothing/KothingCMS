<?php

// +----------------------------------------------------------------------
// | Framework { PHP Framework } 
// +----------------------------------------------------------------------



// 应用目录为当前目录
define('APP_PATH', __DIR__ . '/');

// 开启调试模式
//define('APP_DEBUG', true);

//定义项目目录
define('APP_HOME','Home');

//定义项目模板文件目录
define('HOME_VIEW','template');

//定义项目模板公共文件目录
define('Tpl_common','');

//定义项目控制器文件目录
define('HOME_CONTROLLER','controller');

//定义项目模型文件目录
define('HOME_MODEL','model');


//定义项目默认方法
define('DefaultAction','kothing');

//取消log
define('StopLog',false);

//定义静态文件路径
define('Tpl_style','/static/');

// 加载框架文件
require(APP_PATH . 'Framework/Index.php');

// 就这么简单~

