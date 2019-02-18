<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/18
 * Time: 8:39
 */


//水仙花数
function fun1($n,$m)
{
    for ($n; $n <= $m; $n++) {
        $ge = $n % 10;
        $shi = ($n - 3) / 10 % 10;
        $bai = ($n - $shi * 10 - $ge) / 100;
        if($ge*$ge*$ge+$shi*$shi*$shi+$bai*$bai*$bai == $n){
            echo $n;
            echo "<br>";
        }
    }
}
//print_r(fun1(100,999));


//回文
function fun2($str)
{
    $res = '';
    for ($i = strlen($str) - 1; $i >= 0 ; $i--) {
        $res .= $str[$i];
    }
    for ($i = 0; $i < strlen($str); $i++) {
        if($res[$i] == $str[$i]){
            return true;
        }
        return 2;
    }
}
//print_r(fun2($str='123432'));


//斐波那契数列
function fun3($num)
{
    $arr = [];
    $arr[0] = $arr[1] = 1;
    for ($i = 2; $i < $num; $i++) {
        $arr[$i] = $arr[$i -1] + $arr[$i -2];
    }
    return $arr;
}
//print_r(fun3(5));


//传入一个十进制数字，返回数字对应的英文字母
function fun4($num)
{
    if($num <= 26){
        return chr($num + 64);
    }
    $yu = $num % 26;
    $sh = $num / 26;
    if($yu == 0){
        $qian = chr($sh + 63);
        $hou = chr($yu + 90);
    }else{
        $qian = chr($sh + 64);
        $hou = chr($yu + 64);
    }
    return $qian.$hou;
}
//print_r(fun4(53));


//台阶的个数
function fun5($n)
{
    $arr = [];
    $arr[0] = $arr[1] = 1;
    for ($i = 2; $i < $n + 1; $i++) {
        $arr[$i] = $arr[$i -1] + $arr[$i -2];
    }
    return $arr[$n];
}
//print_r(fun5(10));



//英文字符串首先出现三次的那个英文字符
function fun6($str)
{
    $num = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        for ($j = $i + 1; $j < strlen($str); $j++) {
            if($str[$i] == $str[$j]){
                $num++;
                if($num == 3){
                    return $str[$i];
                }
            }
        }
    }
}
print_r(fun6($str = 'asadafwuwuwu'));