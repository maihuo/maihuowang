<?php

/**
 * @name            ProductsController.class.php
 * @description     产品控制器
 * @package         Home
 * @author          
 */
namespace Home\Controller;

use Think\Controller;

class ProductController extends Controller {
    $product = {
        id:"",
        name:"",
        description:""
        imgs:[],
        //...待根据原有的数据库进行研究
    }
    /**
     * 新建或更新产品,id为空则新建，不为空则更新
     * @param 
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:"id"}
     * @author
     */
    public function createOrEditProduct() {
        //$_POST["product"] = {id:"",name:"",...};
    }

    /**
     * 根据产品ID删除产品
     * @param $id int 产品id
     * @return $message array TODO 讨论格式例如：{result:"success||fail",data:"id"}
     * @author
     */
    public function delProduct($id = null) {
        
    }

    /**
     * 根据产品ID获取产品的信息详情
     * @param $id int 产品id TODO 讨论是否支持array,即根据多个ID获取多个产品
     * @return $product obj TODO 讨论格式
     * @author
     */
    public function browseProduct($id = null) {
        
    }

    /**
     * 获取产品列表
     * @param $value string 根据名字进行搜索
     * @param $orderBy string 排序 TODO讨论（有没有必要）
     * @param $value string 分页问题怎么实现
     * @return $productList obj TODO 讨论格式
     * @author
     */
    public function getProductList($value = null, $orderBy = 'id_desc', $recTotal = 0, $recPerPage = 10, $pageID = 1) {
        
    }




}