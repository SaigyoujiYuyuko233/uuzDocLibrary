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
        if (is_dir("./public/documents/") == false){
            mkdir("./public/documents/");
        }

        $path = "./public/documents/markdown.md";

        file_put_contents($path,"## Tests \n > Tests");

        // 开始解析
        require_once "./App/Parser/MdParser.php";

        $markdown = new MdParser();
        $doc = $markdown->mdParser($path);

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Parser/MdTest] ");
        echo $color->apply("light_green","Successfully to parsing the markdown file. Out put:\n");

        echo $color->apply("light_gray", $doc . "\n");

    }

}