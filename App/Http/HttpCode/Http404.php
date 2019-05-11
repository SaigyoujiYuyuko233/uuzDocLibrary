<?php
/**
 * ProjectName: uuzDocLibrary.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/5/11
 * Time: 18:33
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

namespace App\HttpCode;


class Http404{

    public function show(){
        echo views()->render("HttpCode.404");
        return;
    }

}