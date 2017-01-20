<?php
return array(
	// 开启路由
	"URL_ROUTER_ON" => true,
	// 路由规则，类似于rewrite
	"URL_ROUTE_RULES" => array(
		// 写法1
		//"Test/:name" => "Blog/read?name=:1",
		// 写法2 : :/name动态变量会自动传入，跟参数名称保持一致
		//"Test/:name|md5/[:age\d]$" => ["index/index"],
		// 正则写法
		//"/^(blog|article)\/(\d{2,4})\/(\d{4})$/" => "Test/:1/:2", 
		// 闭包写法
		//"mt/:name/[:age]" => function ($age, $name){
			//echo "hello $name $age";
			//$_SERVER["PATH_INFO"] = "Test/laokiea/12";
			//return false;

			// 处理输出图片(.htaccess里已经限制,防止出现按照路由形式访问)
			'/^Public\/images\/(\d{4})\/(\d{2})\/(\w+)$/' => "Good/Good/printImage/:1/:2/:3",
	),
	//"URL_PARAMS_BIND_TYPE" => 1,
);