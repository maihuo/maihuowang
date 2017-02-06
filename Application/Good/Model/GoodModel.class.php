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
	 * @param $pageID 当前页数
	 * @param $rowCount 当前每页多少条
	 * @param $keyword 需要搜索的关键字，post传入
	 */
	public function getGoodsList($pageID = 1, $rowCount = 15, $keyWord = NULL){
 		$map = ['deleted' => ["NEQ", "1"]];
 		if($keyWord) $map["concat(title, description)"] = ["LIKE", $keyWord];

		$goods = $this->field(["id","title","description","marketprice","productprice","concat('".PUBLIC_PATH."',thumb)"=>"image"])->where($map)->page($pageID, $rowCount)->select();

		$count = $this->where($map)->count();
		if(!empty($error = $this->getDbError())) {
			throwError($error);
			exit;
		}
		$pager = newPage($count,$rowCount, NULL);
		// $pager->show() 返回一段html片段
		return ["goods" => $goods, "totalPages" => ceil($count/$rowCount)];
	}
}