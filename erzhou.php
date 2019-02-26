<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/26
 * Time: 8:39
 */

//1．编写一个程序，传入n与m两个参数，生成1~n的编号，从开头的编号开始数，数到m将对应的元素删除，接下来从下一个元素开始数，数到m就删除，求最后剩下的数字
function fun1($n,$m)
{
    $arr = range(1,$n);
    $i = 0;
    $k = 0;
    $arr1 = [];
    while (count($arr) > 1){
        if(!isset($arr[$i])){
            $arr = $arr1;
            $arr1 = [];
            $i = 0;
        }
        $k++;
        if($k == $m){
            unset($arr[$i]);
            $k = 0;
        }else{
            $arr1[] = $arr[$i];
        }
        $i++;
    }
    return $arr;
}
//print_r(fun1(6,2));


//2．编写一个程序，给定任意长度的数组，数组内包含n个数字，要求将数组分为三组，每组的和尽量相近：
function fun2($arr)
{
    rsort($arr);
    $array = [
        [array_shift($arr)],
        [array_shift($arr)],
        [array_shift($arr)],
    ];
    $count = count($arr);
    for ($i =0; $i < $count; $i++) {
        $array[2][] = $arr[$i];
        if(array_sum($array[2]) > array_sum($array[0])){
            $array = [
                $array[2],
                $array[0],
                $array[1],
            ];
        }else if(array_sum($array[2]) > array_sum($array[1])){
            $array = [
                $array[0],
                $array[2],
                $array[1],
            ];
        }
    }
    return $array;
}
//echo "<pre>";
//print_r(fun2($arr = array(2,34,64,93,45,67,98,45,23,12)));



//3．编写一个函数，传入一个数组，数组内包含n个正整数数字，返回数组内数字可以组成的最大值：
function fun3($arr,$pow=0)
{
    static $sum = [];
    $t = [];
    for ($k = 0; $k < 10; $k++){
        $t[] = [];
    }
    $tt = [];
    for ($i = 0; $i < count($arr); $i++) {
        $str = (string)$arr[$i];
        if($t[$str[$pow]] > 0){
            $t[$str[$pow]][] = $arr[$i];
        }else{
            $tt[$str[$pow - 1]][] = $arr[$i];
        }
    }
    for ($j = 0; $j < 10; $j++){
        if(count($t[$j]) == 1){
            array_unshift($sum,array_pop($t[$j]));
        }else if(count($t[$j]) > 1){
            fun3($t[$j],$pow+1);
        }
        if(isset($tt[$j])){
            array_merge($sum,$tt[$j]);
        }
    }
    $qq = '';
    for ($p = 0; $p < count($sum); $p++) {
        $qq .= $sum[$p];
    }
    return $qq;
}
//echo "<pre>";
//print_r(fun3($arr = array(3,4,7,2,99,6,57)));



//银行有四个柜台，给定两个数组包含客户到达银行的时间与办理业务所需要的时间：
function fun4($dao,$xu)
{
    $wait = 0;
    $chuang = [];
    $count = count($dao);
    for ($i = 0; $i < $count; $i++) {
        if($i < 4){
            $chuang[] = array_shift($dao);
        }
    }
    sort($chuang);
    for ($j =0; $j < $count; $j++) {
        if($chuang[$j] + $xu[$j] > $dao[$j]){
            $wait = $chuang[$j] + $xu[$j] - $dao[$j];
        }else{
            $chuang [] = $dao[$j];
        }
    }
    return $wait / $count;
}
//print_r(fun4($dao = [9.01, 9.10, 9.20, 9.21, 9.22],$xu = [0.30, 0.18, 0.22, 0.47, 0.11]));




//编写一个单例模式的PDO数据库操作类，传入sql执行返回合适的结果即可
class fun5()
{
    private function __construct()
    {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=wu","root","root");
    }
    private static function index(){

    }

    public function


}
