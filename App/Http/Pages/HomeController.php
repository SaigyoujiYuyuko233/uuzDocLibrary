<?php
/**
 * ProjectName: uuzDocLibrary.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/5/11
 * Time: 10:19
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

namespace App\Controller\Pages;

class HomeController{

    public function show(){
        echo views()->render("home.home");
    }

    public function master(){
        echo views()->render("layouts.master");
    }


}