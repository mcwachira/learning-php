<?php
class StringUtility{


    public static function shout($string) {
        return strtoupper($string) . "!";
    }
    public static function whispher($string) {
        return strtolower($string) . "." . "<br/>";
    }

    public static function repeat($string, $times = 2) {
        return str_repeat($string, $times);
    }

}



echo StringUtility::shout("this is a string ") ;
echo StringUtility::whispher("this is a string " ) ;
echo StringUtility::repeat("this is a string ", 8) ;
