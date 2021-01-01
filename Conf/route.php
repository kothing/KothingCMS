<?php

// +----------------------------------------------------------------------
// | KothingCMS  
// +----------------------------------------------------------------------
// | Copyright (c) 2020-2099 http://kothing.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Kothing <kothing@outlook.com>
// +----------------------------------------------------------------------


return [
	/**
		['正则url','系统内真实链接','传输方式POST/GET,或者为空,则表示POST/GET都接收']
		如果有多条匹配，默认第一条有效
		demo：
		['/\/base\/([0-9]+)\.html$/','Home/test/id/$1','GET'],
		['/\/xbase\/([0-9]+)\/(\w+)\.html$/','Home/test/id/$1/sq/$2','POST'],
		['/\/test_([0-9]+)\.html$/','Home/test/id/$1','GET'],
		['/\/abc\.html$/','/shangpin.html',''],
	**/
	//以下规则不可删除，否则会报错！
	//http://demo.jizhicms.cn/Home/screen/molds/product/categories/3
	['/^\/screen-(\w+)-([0-9]+)-(.*)/','Screen/index/molds/$1/tid/$2/k_screen/$3',''],
	['/^\/searchAll(.*)/','Home/searchAll','GET'],
	['/^\/search(.*)/','Home/search','GET'],
	
];













