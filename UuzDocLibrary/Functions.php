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

use UuzDocLibrary\UuzDocLibrary;

use Jenssegers\Blade\Blade;

// env方法 - 获取设置
if (function_exists("env") == false){

    /**
     * @param string $varname The variable name.
     * @return mixed
     */
    function env($varname){
        return $_ENV[$varname];
    }

}

// views方法 - 调用视图
if (function_exists("views") == false){
    function views(){
        return (new Blade([ APP_ROOT . "/public/themes/" . env("APP_THEME") . "/views/"], APP_ROOT . "/storage/cache/views"));
    }
}

// asset方法 - 资源路径
if (function_exists("asset方法") == false){
    function asset($path){
        return "/public/themes/" . env("APP_THEME") . "/public" . $path;
    }
}