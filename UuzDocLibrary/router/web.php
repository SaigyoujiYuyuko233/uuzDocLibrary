<?php
/**
 * ProjectName: uuzDocLibrary.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/5/10
 * Time: 20:38
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

// 主页面
$router->get("/", 'App\Controller\Pages\HomeController@master');

// 主页
$router->get("/home", 'App\Controller\Pages\HomeController@show');

// 阅读文档
$router->get("/uuzDoc/read/{doc}", 'App\Controller\Document\ReadController@show');