<?php
/**
 * Created by PhpStorm.
 * User: songzh  <songzenghai@ylb.net>
 * Date: 2018/3/1 下午7:33
 * Desc:
 */
namespace szh\composerTest;

class Test
{
    function __construct()
    {
        echo '__construct()'.PHP_EOL;
    }

    public function do($msg){
        echo 'add version 1.0.2'.PHP_EOL;
        echo "hello world ".$msg.PHP_EOL;
    }
}