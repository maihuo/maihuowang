<?php

/**
 * @name            SuggestController.class.php
 * @description     建议控制器
 * @package         Home
 * @author          
 */
namespace Home\Controller;

use Think\Controller;

class SuggestController extends Controller {
    $suggest = {
        type:"",
        userID:"",
        content:"",
        contact:"",
    }

    /**
     * 新建意见反馈
     * @param 
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:"id"}
     * @author
     */
    public function createSuggest() {
        //$_POST["suggest"] = {type:"",userID:"",...};
    }

    /**
     * 根据ID设置建议是否被处理
     * @param $id int 建议的id
     * @return $message array TODO 讨论格式例如：{result:"success||fail",data:"id"}
     * @author
     */
    public function dealSuggest($id = null) {
        
    }

    /**
     * 获取建议列表
     * @param
     * @return $suggesList obj TODO 讨论格式
     * @author
     */
    public function getSuggestList( $recTotal = 0, $recPerPage = 10, $pageID = 1) {
        
    }
    /**
     * 搜索建议列表
     * @param $type  buy(购物流程) express(物流问题) service(售后服务) new(新品建议) other(其他建议)
     * @return $suggesList obj TODO 讨论格式
     * @author
     */
    public function searchSuggestList($type = all) {
        //$_POST["start"] = "";
        //$_POST["end"] = "";
    }
   
}