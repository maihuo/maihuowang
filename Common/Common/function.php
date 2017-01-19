<?php
/**
 * @name            function.php
 * @description     公共函数
 * @package         Common
 * @author          段辽阔 2015-07-01
 * @copyright       南京业禾网络科技有限公司
 */

/**
 * 上传图片
 * @author 萨圣鹏 2015-11-05
 */
  function uploadImage($save_path){  
        //完成与thinkphp相关的，文件上传类的调用     
        $upload = new \Think\Upload();// 实例化上传类/  
        $upload->maxSize = '5242880';//默认为-1，不限制上传大小  
        $upload->rootPath = "./Upload/";//保存路径建议与主文件平级目录或者平级目录的子目录来保存 
        $upload->savePath = $save_path;    
        $upload->saveName = array('uniqid');//上传文件的文件名保存规则  
        $upload->uploadReplace = true;//如果存在同名文件是否进行覆盖  
        $upload->exts = array('jpg','jpeg','png','gif');//准许上传的文件类型  
        $upload->mimes = array('image/png','image/jpg','image/jpeg','image/gif');//检测mime类型  
        $upload->hash = true;
        $info = $upload->upload();
        if($info){  
            return $info;  
        }else{  
            $this->error($upload->getError());//专门用来获取上传的错误信息的     
        }     
    }

/**
 * 分页
 * @param integer $count 总数
 * @param integer $listRows 列出的行数
 * @return \Think\Page
     */
function newPage($count, $listRows = null) {
    $page = new \Think\Page($count, is_null($listRows) ? C('PAGE_LIST_ROWS') : $listRows);
    //$page->setConfig('header', '条信息>&nbsp;');
    $page->setConfig('prev','<');
    $page->setConfig('next','>');
    $page->setConfig('theme',' %HEADER% %UP_PAGE% %FIRST% %LINK_PAGE% %DOWN_PAGE% %END%');
    //<共 <span style="color:rgb(54,168,96);">%TOTAL_ROW%</span>
    return $page;
    }

/*
 * dump a var.
 * @param mixed $var 
 * @access public
 * @return void
 */
function p($var)
{
    echo "<xmp class='a-left'>";
    print_r($var);
    echo "</xmp>";
    die;
}
