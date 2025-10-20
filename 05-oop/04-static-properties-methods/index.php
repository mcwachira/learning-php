<?php
class MathUtility {
    public static $pi =3.14;

public static function add( ...$num) {
    return array_sum($num);
}
}
echo MathUtility::$pi . '<br/> ';
echo MathUtility::add(1,2,3,4,5,6,7,8,9);