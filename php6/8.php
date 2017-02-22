<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    9.匿名函数
        之前已经介绍回调函数，就是把函数名作为参数传递使用
        使用回调 还要自己定义函数名，不够灵活方便
        可以临时的创建一个没有指定名称的函数，来供你使用
    */
    //将一个没有函数名的函数赋值给了一个变量
    //这个就是定义匿名函数
        $hehe = function ($a) {
            echo $a;
        };//此处不得少了分号！！！

        //变量后加括号，并传递参数，这就是调用了匿名函数
        $hehe('呵呵哒！');//变量可以快捷的像函数一样使用

        echo '<hr>';
        //匿名函数内部要使用外部的变量
        //必须使用use关键字 来连接内部和外部的变量
        $func = function () use(&$x,&$y) {
            $x *=2;
            $y *=3;
            $z = $x + $y;
            return $z;
        }