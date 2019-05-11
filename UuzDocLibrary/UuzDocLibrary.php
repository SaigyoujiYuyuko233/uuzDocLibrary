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

use Bramus\Router\Router;
use Dotenv\Dotenv;

require_once APP_ROOT . "/vendor/autoload.php";

class UuzDocLibrary{

    public function run(){

        // 初始化框架
        $this->init();

        // 加载路由
        $this->loadRouter();

    }


    private function init(){

        // 加载.env
        $dotEnv = Dotenv::create(APP_ROOT);
        $dotEnv->load();

        // 加载方法
        require_once APP_ROOT . "/UuzDocLibrary/Functions.php";

        // 加载文件
        require_once APP_ROOT. "/App/Http/Pages/HomeController.php";
        require_once APP_ROOT. "/App/Parser/DirParser.php";

    }


    private function loadRouter(){
        $router = new Router();

        require APP_ROOT . "/UuzDocLibrary/router/web.php";

        $router->run();
    }
}