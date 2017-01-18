<?php

/**
 * @name            CartController.class.php
 * @description     购物车控制器
 * @package         Home
 * @author          
 */
namespace Home\Controller;

use Think\Controller;

class CartController extends Controller {
    $cart = {
        products:[{id:"product.id",amount:"amount"}]
    }
    /**
     * 将产品放入购物车，如果产品已经在购物车内，则更新该产品的数量
     * @param $pid int 产品id
     * @param $amount int 产品数量
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:""} 希望能够返回购物车里的产品数量
     * @author
     */
    public function putProductsInCart( $pid, $amount ) {
    }

    /**
     * 获取购物车里的产品
     * @param 
     * @param 
     * @return $products array TODO 讨论格式
     * @author
     */
    public function getCartProducts() {
    }
    /**
     * 根据产品ID删除购物车中的产品
     * @param $id int 产品id
     * @return $message array TODO 讨论格式例如：{result:"success||fail",data:"id"}
     * @author
     */
    public function delCartProducts() {
        //$_POST['productIDs'] = ["product.id"];
    }

}