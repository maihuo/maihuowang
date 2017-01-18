<?php

/**
 * @name            NotificationController.class.php
 * @description     通知控制器
 * @package         Home
 * @author          
 */
namespace Home\Controller;

use Think\Controller;

class NotificationController extends Controller {

    /**
     * 创建通知公告
     * @param 
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:"id"}
     * @author
     */
    public function createNotification() {
        //$_POST["value"] = {title:"",content:""};
    }
    /**
     * 根据公告id删除通知公告
     * @param $id 公告的id
     * @return $message array TODO 讨论格式例如：{result:"sucess||fail",data:"id"}
     * @author
     */
    public function delNotification($id) {
    }
    /**
     * 获取通知公告 TODO 后台主动返回
     * @param time
     * @return $notifigationList obj TODO 讨论格式
     * @author
     */
    public function getNotificationList( ) {
        
    }

}