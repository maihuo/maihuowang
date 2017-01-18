<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

	// public function _before_index()
	// {
	// 	echo "before";
	// }

    public function index($name = null, $age = null, $kind = null){
    	// echo I("get.name","",function($v){return md5($v);});
    	//var_dump( REQUEST_METHOD );
       //echo __EXT__;
    	//var_dump(C("URL_CASE_INSENSITIVE"));'
    	// $url = U('Index/index', ["name" => "laokiea", "age" => 30, "kind" =>base64_encode(json_encode([1,2]))],"html");
    	// if(!$name) header("Location:".$url);
    	//var_dump(func_get_args());
    	// $this->error("success", "index/index");
    	//$this->redirect('Index/index', array('cate_id' => 2), 5, '页面跳转中...');
    	//$Good = M("bj_qmxk_goods");
    	//$Good = D("good");
    	// $Good = new \Home\Model\GoodModel();
    	$Good = new \Think\Model("info","account_",'DB_CONFIG_GUITOO');
    	// var_dump($Good->db(1, "DB_CONFIG_GUITOO")->query("select * from account_info"));
    	$map = ["id" => ["EQ", 11]];
    	// var_dump( $Good->where($map)->select() );
    	var_dump( $Good->table("__QQ__")->where("id = 12")->select() );
    	//var_dump($Good->getDbFields());
    }

    public function _empty($name)
    {
    	$this->out($name);
    }

    public function out($name)
    {
    	echo $name;
    }

 //    public function _after_index()
	// {
	// 	echo "after";
	// }
}