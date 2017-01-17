<?php

/**
 * @name            OrderController.class.php
 * @description     订单控制器
 * @package         Home
 * @author          
 */
namespace Home\Controller;

use Think\Controller;

class OrderController extends Controller {
    $order = {
        products:[{id:"product.id",amount:"amount"}],
        time:"",
        customer:"",
        address:"",
        phone:"",
        contact:"",
        status:"",
    }
    /**
     * 将产品放入购物车，如果产品已经在购物车内，则更新该产品的数量
     * @param $pid int 产品id
     * @param $amount int 产品数量
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:""} 希望能够返回购物车里的产品数量
     * @author
     */
    public function creatOrder() {
        //$_POST[]
    }
    /**
     * 根据订单的ID获取订单详情
     * @param $id 订单的id
     * @param $pid 订单产品的id
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:""} 希望能够返回购物车里的产品数量
     * @author
     */
    public function returnOrder($id,$pid) {
    }
    /**
     * 根据订单的ID获取订单详情
     * @param $id 订单的id
     * @return $order obj TODO 讨论格式
     * @author
     */
    public function getOrder($id) {
    }
    /**
     * 获取订单列表
     * @param $status 订单状态 unpaid||undeliver||unreceive||done||all||return
     * @return $orderList obj TODO 讨论格式
     * @author
     */
    public function getOrderList($status = all) {

    }
    /**
     * 搜索订单,支持时间、编号、用户的搜索
     * @param $status
     * @return $orderList obj TODO 讨论格式
     * @author
     */
    public function searchOrder() {
        //$_POST["value"]="";//支持订单编号，用户ID，用户名称？
        //$_POST[begin]="";//时间起始日期
        //$_POST[end]="";//时间终止日期，默认今天
    }

    /**
     * 获取订单列表,管理员人员用
     * @param $status 订单状态 unpaid||undeliver||unreceive||done||all||return
     * @return $orderList obj TODO 讨论格式
     * @author
     */
    public function getOrders($status = all) {

    }

    /**
     * 发货,填写发货单据号
     * @param $status 订单状态 unpaid||undeliver||unreceive||done||all||return
     * @return $orderList obj TODO 讨论格式
     * @author
     */
    public function deliverOrder($id) {
        //$_POST["express"]= "";//单据编号
    }
    /**
     * 处理退货的订单
     * @param $status 订单状态 unpaid||undeliver||unreceive||done||all||return
     * @return $orderList obj TODO 讨论格式
     * @author
     */
    public function returnOrder($id) {
    }

    /**
     * 客户收货
     * @param $status 订单状态 unpaid||undeliver||unreceive||done||all||return
     * @return $orderList obj TODO 讨论格式
     * @author
     */
    public function receiveOrder($id) {
        //TODO 客户不点击收货，怎么处理
    }

}