<?php
/**
 * ProjectName: uuzDocLibrary.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/5/12
 * Time: 11:55
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

namespace Test\Feature\Parser;

use App\Parser\MdParser;
use Colors\Color;
use PHPUnit\Framework\TestCase;

class MdTest extends TestCase{

    public function testParser(){

        // 初始化变量
        $color = new Color();

        // 生成md文件
        mkdir("./public/documents/");
        $path = "./public/documents/markdown.md";

        file_put_contents($path,"## Test \n > Test");

        // 开始解析
        require_once "./App/Parser/MdParser.php";

        $markdown = new MdParser();
        $doc = $markdown->mdParser($path);

        if ($doc != null){
            echo $color->apply("magenta","\n[Testing]");
            echo $color->apply("light_blue","[Access/GameTest] ");
            echo $color->apply("light_green","Successfully to access '/view/resources/games' - 200 √\n");
        }

    }

}