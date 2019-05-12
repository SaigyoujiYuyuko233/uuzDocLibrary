<?php
/**
 * ProjectName: uuzDocLibrary.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/5/11
 * Time: 17:53
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

namespace App\Controller\Document;

use App\Parser\DocListParser;
use App\Parser\DirParser;
use App\Parser\MdParser;
use PhilGale92Docx\Docx;
use WordParser\WordParser;

class ReadController{

    public function show($doc){

        // 文档路径
        $path = APP_ROOT . env("DOC_PATH") . "/" . str_replace("|", "/", $doc);

        // 文件不存在 - 404
        if (is_file($path) == false){
            echo views()->render("HttpCode.404");
            return;
        }

        // 获取文件拓展名
        $fileFormat = pathinfo($path)['extension'];


        // md 文件
        if ($fileFormat == "md"){

            // 解析器
            $markdownParser = new MdParser();

            // 解析
            $markdown = $markdownParser->mdParser($path);

            // 渲染视图

            echo views()->render("doc.markdown", [
                "docName" => basename($path),
                "markdown" => $markdown
            ]);

            return;
        }


        // word 文件
        if ($fileFormat == "docx" || $fileFormat == "doc"){

            // 解析
            $docx = new Docx($path);
            $docxHtml = @$docx->render(Docx::RENDER_MODE_HTML);

            // 渲染视图
            echo views()->render("doc.docx", [
                "docName" => basename($path),
                "docx" => $docxHtml
            ]);

            return;
        }

        return;

    }

}