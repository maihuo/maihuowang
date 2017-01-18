<?php
namespace Good\Controller;
use Think\Controller;
class GoodController extends Controller {

	/**
	 * Browse Goods,Get Goods List
	 */
    public function browse($pageID = 1, $rowCount = NULL){
    	// 如果不帶參數,使用這種形式
    	//$pagerID = I("get.id", 1);
        $Good = D("Good");
        $return = $Good->getGoodsList($pagerID, $rowCount);
        echo json_encode($return);exit;
    }
}