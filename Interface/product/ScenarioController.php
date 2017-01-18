<?php

/**
 * @name            ScenarioController.class.php
 * @description     场景控制器，一组相同的产品，类似分类
 * @package         Home
 * @author          
 */
namespace Home\Controller;

use Think\Controller;

class ScenarioController extends Controller {
    $scenario = {
        img:"",//图片
        description:"",//描述
        products:["product.id"]//包含的产品，记录产品的ID,TODO 只记录产品还是id,img,name,description
    }
    /**
     * 新建或更新场景,id为空则新建，不为空则更新
     * @param
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:"id"}
     * @author
     */
    public function createOrEditScenario() {
        //$_POST["scenario"] =  {img:"",description:"",products:["product.id"]}
    }

    /**
     * 根据场景ID删除场景
     * @param $id int 场景id
     * @return $message array TODO 讨论格式例如：{result:"success||fail",data:"id"}
     * @author
     */
    public function delScenario($id = null) {
        
    }

    /**
     * 根据场景ID获取场景的信息详情
     * @param $id int 场景id
     * @return $scenario obj TODO 讨论格式
     * @author
     */
    public function browseScenario($id = null) {
        
    }

    /**
     * 获取场景列表
     * @param $value string 根据名字进行搜索
     * @param $orderBy string 排序 TODO讨论（有没有必要）
     * @param $value string 分页问题怎么实现
     * @return $scenarioList obj TODO 讨论格式
     * @author
     */
    public function getScenarioList($value = null, $orderBy = 'id_desc', $recTotal = 0, $recPerPage = 10, $pageID = 1) {
        
    }


}