<?php

/**
 * @name            AddressController.class.php
 * @description     地址控制器
 * @package         Home
 * @author          
 */
namespace Home\Controller;

use Think\Controller;

class AddressController extends Controller {
    $address = {
        id:"",
        userID:"",
        phone:"",
        contact:"",
        IDcard:"",
        address:""
    }

    /**
     * 新建或更新地址,id为空则新建，不为空则更新
     * @param 
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:"id"}
     * @author
     */
    public function createOrEditAddress() {
        //$_POST["address"] = {id:"",userID:"",...};
    }

    /**
     * 根据地址ID删除地址
     * @param $id int 产品id
     * @return $message array TODO 讨论格式例如：{result:"success||fail",data:"id"}
     * @author
     */
    public function delAddress($id = null) {
        
    }

    /**
     * 获取地址列表
     * @param
     * @return $addressList obj TODO 讨论格式
     * @author
     */
    public function getAddressList( $recTotal = 0, $recPerPage = 10, $pageID = 1) {
        
    }

    /**
     * 设置默认地址
     * @param $id 地址ID
     * @param $userID 地址ID
     * @return $message array TODO 讨论格式例如：{result:"success||fail",data:"id"}
     * @author
     */
    public function setDefaultAddress( $id , $userID ) {
        
    }

    /**
     * 获取省
     * @param 
     * @return $province
     * @author
     */
    public function getProvince( ) {
        
    }
    /**
     * 根据省获取市
     * @param $id 省的ID
     * @return $message array TODO 讨论格式例如：{result:"success||fail",data:"id"}
     * @author
     */
    public function getCity($id) {
        
    }
    /**
     * 根据市获取区
     * @param $id 市的ID
     * @return $message array TODO 讨论格式例如：{result:"success||fail",data:"id"}
     * @author
     */
    public function getArea($id) {
        
    }
}