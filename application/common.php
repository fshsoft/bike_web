<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Controller;
use think\Db;
use think\Request;
use think\Session;
// 应用公共文件
error_reporting(E_ERROR | E_PARSE );

/**
 *快捷打印变量
 * @param $val
 */
function p($val)
{
	if (is_bool($var)) {
		var_dump($val);
	}else {
		echo "<pre style='position:relative;z-index:1000;padding:10px;
		border-radius:5px;background:#F5F5F5;border:1px solid #aaa;font-size:14px;
		line-height:18px;opacity:0 9;'>".print_r($val,true)."</pre>";
	}
}


/**
 * 保存(根据是否有$_POST["id"]来判断执行插入或更新操作)
 * @param string $table
 * 
 */
function saveData($table,$data)
{
	if(empty($data["id"])){
		//新增数据并返回主键值
		$rs=Db::name($table)->insertGetId($data);
	}
	else{
		$rs=Db::name($table)->where('id',$_POST["id"])->update($data);
	}
	return $rs;
}

/**
 * 获取某一字段的值
 * @param string $table
 * @param array $where
 * @param string $field
 * @return string
 */
function getFieldName($table,$where,$field='name')
{
	$rs = Db::name($table)->where($where)->value($field);
	return $rs;
}


/**
 * 生成随机数
 * @param 长度 $length
 * @param 是否是数字 $num
 * @return varchar
 */
function random($length=6,$num)
{
	$str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";   //   输出字符集
	if($num)$str = "0123456789";   //   只输出数字
	$len = strlen($str)-1;
	for($i=0 ; $i<$length; $i++){
	    $s .=  $str[rand(0,$len)];
	}
	return $s;
}