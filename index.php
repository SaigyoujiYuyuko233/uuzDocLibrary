<?php
/**
 * ProjectName: UuzDocLibrary.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/5/9
 * Time: 14:36
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

// defined var
define("APP_ROOT", __DIR__);
define("APP_VERSION", "1.0.0");
define("APP_ISSUE", "0015");
define("APP_START", microtime(true));

// require files
require_once "UuzDocLibrary/UuzDocLibrary.php";
require_once "UuzDocLibrary/Functions.php";

// 启动框架
$core = new \UuzDocLibrary\UuzDocLibrary();
$core->run();
