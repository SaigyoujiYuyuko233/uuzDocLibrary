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

use App\Parser\DirParser;

class HomeController{

    public function show(){
        $dirTree = (new DirParser())->getDirectoryTree(APP_ROOT . env("DOC_PATH"));

        echo views()->render("home.home", [
            "docTree" => $dirTree,
            "doc_list" => $this->dirParser($dirTree),
        ]);
    }


    private function dirParser($arr){

        // 所有文件夹
        $dir_html = "";

        // 所有文件
        $file_html = "";

        foreach ($arr as $key => $value){

            // 如果里面是数组 - 文件夹
            if (is_array($value) == true){

                $tmp = $this->dirParser($value);

                $dir_html .= '<li class="mdui-collapse-item mdui-collapse-item-open">
                                <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                                    <i class="mdui-list-item-icon mdui-icon material-icons">folder</i>
                                    <div class="mdui-list-item-content">' . $key . '</div>
                                    <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
                                </div>
                                    <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">' . $tmp . '</ul>';

                continue;
            }


            // 如果不是数组 - 文件
            if (is_array($value) == false){

                $file_html .= "  <li class=\"mdui-list-item mdui-ripple\">
                                    <i class=\"mdui-list-item-icon mdui-icon material-icons\">&#xe865;</i>
                                    <div class=\"mdui-list-item-content\">$value</div>
                                  </li>";

                continue;
            }

        }

        return $dir_html . $file_html;

    }

}