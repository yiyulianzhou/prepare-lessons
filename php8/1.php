<?php 
    header("Content-type:text/html;charset=utf-8");
    /*
    正则表达式
        定义：
            正则表达式也叫作模式表达式
            正则配合特定的函数，来实现字符串的匹配，查找，替换，分割等等操作。
            正则本质上也是一个字符串
    什么时候用正则?
        当字符串函数不能搞定某些操作时，就需要请正则出山了
        如：匹配手机号，邮箱验证，日期，账号密码等。

    */
    $str = "根据国家统计局数据显示，2015年全国居民人居可支配收入21966，比上年名义增长8.9%,扣除价格因素实际增长7.4%。按常住地分，城镇居民人居可支配收入31195元，比上年增长8.2%,扣除价格因素实际增长6.6%";
    $new_str = str_replace('国家统计局','有关部门',$str);
    echo $str;
    echo '<br/>';
    echo $new_str;

    echo '<hr/>';
    $str = '根据国家统计局123456789@qq.com数据显示，2015年全国居民人居可支配收入21966，比上年名义增长8.9%,扣除价格1122334455@gmail.com因素实际增长7.4%。按常住地分，城镇居民人居可支配收入31195元，比上年增长8.2%,扣除价格因素实际增长6.6%';
    echo $str;
    echo '<br/>';

    $search = array(
        '123456789@qq.com',
        '987654321@163.com',
        '1122334455@gmail.com'
        );
    $replace = array(
        '<a href="#1">123456789@qq.com</a>',
        '<a href="#2">987654321@163.com</a>',
        '<a href="#3">1122334455@gmail.com</a>'
        );
    $new_str = str_replace($search,$replace,$str);
    echo '<br>';
    echo $new_str;
  
 ?>