<?php

// +----------------------------------------------------------------------
// | KothingCMS  
// +----------------------------------------------------------------------
// | Copyright (c) 2020-2099 http://kothing.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Kothing <kothing@outlook.com>
// +----------------------------------------------------------------------


namespace Home\controller;

use Framework\lib\Controller;

class ErrorController extends Controller
{
	//错误处理示例
	function index($msg){
		$msg = format_param($msg,1);
		echo '错误信息提示：<br/>';	
		echo $msg;

    }
}
	