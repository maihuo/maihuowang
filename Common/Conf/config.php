<?php
return array(
	"URL_MODEL" => 1,//PATHINFO

	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    // 'DB_DSN'                =>  'mysql://root:@localhost:3306/thinkphp#utf8',
    // 'DB_DSN'                => 'mysql:host=localhost;dbname=maihuo;charset=utf-8',
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'maihuo',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'ims_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  false,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号

    "DB_CONFIG_GUITOO"      => 'mysql://qdm177116231:Ssp6315417@qdm177116231.my3w.com/qdm177116231_db#utf8',// 数据库配置

    "PAGER_ROW_COUNT"       => 20,//默認分页显示条数

    'URL_PATHINFO_DEPR'     => '-',// 更改PATHINFO参数分隔符
    'URL_PARAMS_BIND_TYPE'  => 1,  //url参数绑定按照参数顺序(如果是按照参数名称设置为0)

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

			// // 处理输出图片(.htaccess里已经限制,防止出现按照路由形式访问)
			// '/^Public\/images\/(\d{4})\/(\d{2})\/(\w+)\.(jpg|jpeg|gif|bmp|png)$/' => "Good/Good/printImage?:1-:2-:3-:4",
	),
	'SHOW_ERROR_MSG'        =>  true,    // 显示错误信息（仅在开发调试模式下打开）
	'ERROR_PAGE'            => '',       // 线上模式，指引用户跳向错误页面
	'ERROR_MESSAGE'         =>  '页面错误！请稍后再试～',//友好显示错误

	'LOAD_EXT_CONFIG'       => 'tips', //加载扩展配置文件
);