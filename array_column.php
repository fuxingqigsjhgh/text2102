<?php
   $arr1 = [
    ["name"=>"zhangsan","age"=>11,"email"=>"zhangsan@qq.com"],
    ["name"=>"lisi","age"=>22,"email"=>"lisi@qq.com"],
    ["name"=>"wangwu","age"=>33,"email"=>"wangwu@qq.com"],
    ["name"=>"zhaoliu","age"=>44,"email"=>"zhaoliu@qq.com"],
];

$name = array_column($arr1,'name'); //取出name列
$age = array_column($arr1,'age'); //取出age列
echo '<pre>';print_r($name);echo '</pre>';
echo '<pre>';print_r($age);echo '</pre>';


//取出多维数组中的某一列
