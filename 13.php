<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/27
 * Time: 10:23
 */

function fun($a,$b)
{
    $sum = 0;
    while ($b) {
        $sum = $a ^ $b;
        $b = ($a & $b) << 1;
        $a = $sum;
    }
    return $sum;
}
print_r(fun(7,2));