<?php

/**
 * @name            UserController.class.php
 * @description     用户控制器
 * @package         Home
 * @author          
 */
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {
    $user = {
        id:"",
        avatar:"",
        nickname:"",
        phone:"",
        passward:"",
    }

    /**
     * 编辑用户信息 TODO 用户头像上传可能有问题
     * @param 
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:"id"}
     * @author
     */
    public function EditUser() {
        //$_POST["user"] = {id:"",avatar:"",...};
    }

    /**
     * 获取用户信息
     * @param
     * @return $user obj 讨论格式
     * @author 
     */
    public function getUser( ) {
        
    }
    /**
     * 用户登录 TODO 考虑第三方工具，待讨论
     * @param
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:"id"}
     * @author 
     */
    public function login( ) {
        
    }

}