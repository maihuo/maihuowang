<?php

/**
 * Good模型, 主要操作goods相关数据表
 */ 

namespace Good\Model;
use Think\Model;

class GoodModel extends Model {
	protected $trueTableName = "ims_bj_qmxk_goods";

	/**
	 * Get Goods List
	 */
	public function getGoodsList($pageID = 1, $rowCount = NULL){
		if(!$rowCount) $rowCount = C("PAGER_ROW_COUNT");
 		$map = ['deleted' => ["NEQ", "1"]];
		$goods = $this->field(["id","title","description","marketprice","productprice","concat('".PUBLIC_PATH."',thumb)"=>"image"])->where($map)->page($pageID, $rowCount)->select();
		$count = $this->where($map)->count();
		// if(!function_exists("newPage")){ 
		// 	function newPage($count, $rowCount, $params){
		// 	return new \Think\Page($count, $rowCount ,NULL);
		// }}
		$pager = newPage($count,$rowCount, NULL);
		// $pager->show() 返回一段html片段
		return ["goods" => $goods, "totalPages" => ceil($count/$rowCount)];
	}
}