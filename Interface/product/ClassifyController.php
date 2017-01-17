<?php

/**
 * @name            ClassifyController.class.php
 * @description     产品归类控制器，包含一组产品和一些场景链接图片
 * @package         Home
 * @author          
 */
namespace Home\Controller;

use Think\Controller;

class ClassifyController extends Controller {
    $classify = {
        title:"",//名称
        banner:[{id:"scenario.id",img:"scenario.img"}],//轮播图，记录场景的img和id
        description:"",//描述
        subDescription:"",//次描述
        products:["product.id"],//产品组
        scenario:[{id:"scenario.id",img:"scenario.img"}]//其他场景
    }
    /**
     * 新建或更新归类,id为空则新建，不为空则更新
     * @param 
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:"id"}
     * @author
     */
    public function createOrEditClassify() {
        //$_POST["classify"] = {title:"",banner:[{id:"scenario.id",img:"scenario.img"}],description:"",subDescription:"",products:["product.id"],scenario:[{id:"scenario.id",img:"scenario.img"}]
    }
    }

    /**
     * 根据归类ID删除归类
     * @param $id int 归类id
     * @return $message array TODO 讨论格式例如：{result:"success||fail",data:"id"}
     * @author
     */
    public function delClassify($id = null) {
        
    }

    /**
     * 根据归类ID获取归类的信息详情
     * @param $id int 归类id
     * @return $classify obj TODO 讨论格式
     * @author
     */
    public function browseClassify($id = null) {
        
    }

    /**
     * 获取归类列表
     * @param $value string 根据名字进行搜索
     * @param $orderBy string 排序 TODO讨论（有没有必要）
     * @param $value string 分页问题怎么实现
     * @return $classifyList obj TODO 讨论格式
     * @author
     */
    public function getClassifyList($value = null, $orderBy = 'id_desc', $recTotal = 0, $recPerPage = 10, $pageID = 1) {
        
    }


}