<?php
namespace Good\Controller;
use Think\Controller;
class GoodController extends Controller {

	/**
	 * Browse Goods,Get Goods List
	 * @param $pageID 当前页数
	 * @param $rowCount 当前每页多少条
	 */
    public function browse($pageID = 1, $rowCount = NULL){
    	// 如果不帶參數,使用這種形式
    	// $pageID = I("get.pageID", 1);
    	if(is_null($rowCount)) $rowCount = C("PAGER_ROW_COUNT");
        $Good = D("Good");
        $result = $Good->getGoodsList($pageID, $rowCount);
        $this->ajaxReturn($result);
    }


    /**
     * browse goods by search keyword
     * @param $keyword 需要搜索的关键字，post传入
     * @param $pageID 当前页数
	 * @param $rowCount 当前每页多少条
     */
    public function browseBysearch()
    {
    	checkSessionStart();
    	$keyWord  = I("post.keyword", session('key_word_for_search'));
    	$pageID   = I("post.pageID", 1);
    	$rowCount = I("post.rowCount", C("PAGER_ROW_COUNT"));
    	// 关键字为空，跳回首页
    	if(empty($keyWord)) header("Location: ".U("Good/Good/browse"));

    	$Good = D("Good");
    	$result = $Good->getGoodsList($pageID, $rowCount, $keyWord);
    	session('key_word_for_search',$keyWord);
    	$this->ajaxReturn($result);
    }
}