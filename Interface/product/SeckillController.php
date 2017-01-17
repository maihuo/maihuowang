<?php

/**
 * @name            ProductsController.class.php
 * @description     产品控制器
 * @package         Home
 * @author          
 */
namespace Home\Controller;

use Think\Controller;

class SeckillController extends Controller {
    $seckill = {
        id:"",
        date:"",//秒杀的日期
        content:[{time:[id:"product.id",price:"price"]}]//每天共有四次秒杀的时间段，时间段做key的产品组做value
    }
    /**
     * 新建或更新秒杀,id为空则新建，不为空则更新
     * @param 
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:"id"}
     * @author
     */
    public function createOrEditSeckill() {
        //$_POST["seckill"] =  {id:"",date:"",content:[{time:[id:"product.id",price:"price"]}];
    }

    }

    /**
     * 根据秒杀ID删除秒杀
     * @param $id int 产品id
     * @return $message array TODO 讨论格式例如：{result:"success||fail",data:"id"}
     * @author
     */
    public function delSeckill($id = null) {
        
    }

    /**
     * 根据秒杀ID获取秒杀的信息详情
     * @param $date string 
     * @return $seckill obj TODO 讨论格式
     * @author
     */
    public function browseSeckill( $date = null) {
        //如果date为空，设置成今天，不为空则取出date对应日期的秒杀
    }

    /**
     * 获取秒杀列表
     * @param $orderBy string 排序 TODO讨论（有没有必要）
     * @param $value string 分页问题怎么实现
     * @return $productList obj TODO 讨论格式
     * @author
     */
    public function getSeckillList( $orderBy = 'id_desc', $recTotal = 0, $recPerPage = 10, $pageID = 1) {
        
    }




}