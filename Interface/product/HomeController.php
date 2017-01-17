<?php

/**
 * @name            Controller.class.php
 * @description     产品控制器
 * @package         Home
 * @author          
 */
namespace Home\Controller;

use Think\Controller;

class HomeController extends Controller {
    $home = {
        classify:[{id:"classify.id",order:""}],//首页包含的产品分类,和顺序，此处有待讨论
        banner:[{id:"scenario.id",img:"scenario.img"}],//轮播图，记录场景的img和id
        products:["product.id"],//产品组
        scenario:[{id:"scenario.id",img:"scenario.img"}],//其他场景
    }
    /**
     * 添加或编辑产品分类
     * @param 
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:"id"}
     * @author
     */
    public function addOrEditClassify() {
        //$_POST["classify"] = [{id:"classify.id",order:""}];
    }

    /**
     * 添加或编辑轮播图
     * @param $id int 产品id
     * @return $message array TODO 讨论格式例如：{result:"success||fail",data:"id"}
     * @author
     */
    public function addOrEditBanner() {
        //$_POST["banner"] = [{id:"scenario.id",img:"scenario.img"}];
    }
    /**
     * 添加或编辑产品
     * @param $id int 产品id
     * @return $message array TODO 讨论格式例如：{result:"success||fail",data:"id"}
     * @author
     */
    public function addOrEditProducts() {
        //$_POST["products"]=["product.id"];
    }
    /**
     * 添加或编辑场景
     * @param $id int 产品id
     * @return $message array TODO 讨论格式例如：{result:"success||fail",data:"id"}
     * @author
     */
    public function addOrEditScenario() {
        //$_POST["scenario"] = [{id:"scenario.id",img:"scenario.img"}];
    }

    /**
     * 获取首页信息
     * @param $id int 产品id TODO 讨论是否支持array,即根据多个ID获取多个产品
     * @return $home obj TODO 讨论格式
     * @author
     */
    public function browseHome() {
        
    }

}