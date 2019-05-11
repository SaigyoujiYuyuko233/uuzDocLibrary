<?php
/**
 * ProjectName: uuzDocLibrary.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/5/11
 * Time: 18:06
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

namespace App\Parser;

use Parsedown;

class MdParser{

    public function mdParser($path){

        $parseDown = new Parsedown();

        $parseDown->setSafeMode(env("MD_SAFEMODE"));

        $file = file_get_contents($path);

        $markdown = $parseDown->text($file);

        return $markdown;

    }

}