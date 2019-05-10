<?php
/**
 * ProjectName: UuzDocLibrary.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/5/9
 * Time: 15:00
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

namespace UuzDocLibrary;

require_once APP_ROOT . "/vendor/autoload.php";

class UuzDocLibrary{

    public static $env;

    public function run(){

        // 初始化框架
        $this->init();

        // 读取配置
        $this->loadConf();

        // 加载路由

    }

    private function loadConf(){
        $file = file(APP_ROOT . "/.env");

        print_r($file);

        for ($i = 0; $i < count($file); $i++){
            $conf = str_replace("\n", "", $file[$i]);

            $key = explode("=", $conf)[0];
            //$value = explode("=", $conf)[1];



            //self::$env[$key] = "a";
        }
    }

    private function init(){

        // 加载方法
        require_once APP_ROOT . "/UuzDocLibrary/Functions.php";

    }

}