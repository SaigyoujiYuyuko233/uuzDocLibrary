<?php
/**
 * ProjectName: uuzDocLibrary.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/5/11
 * Time: 18:57
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

namespace App\Parser;


class DocListParser{

    public function htmlParser($arr){

        // 所有文件夹
        $dir_html = "";

        // 所有文件
        $file_html = "";

        foreach ($arr as $key => $value){

            // 如果里面是数组 - 文件夹
            if (is_array($value) == true){

                $tmp = $this->htmlParser($value);

                $dir_html .= '<li class="mdui-collapse-item">
                                <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                                    <i class="mdui-list-item-icon mdui-icon material-icons">folder</i>
                                    <div class="mdui-list-item-content">' . $key . '</div>
                                    <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
                                </div>
                                    <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
                                     <ul class="mdui-list" mdui-collapse="{accordion: false}" id="path=' . $key . '">
                                    ' . $tmp . '</ul></ul>';

                continue;
            }


            // 如果不是数组 - 文件
            if (is_array($value) == false){

                // 替换文件拓展名
                $tmp = explode(".", $value);
                $docName =  str_replace("." . end($tmp), "", $value);

                $file_html .= "  <li class=\"mdui-list-item mdui-ripple\" value='$value' onclick='doc(\"$value\");'>
                                    <i class=\"mdui-list-item-icon mdui-icon material-icons\">&#xe865;</i>
                                    <div class=\"mdui-list-item-content\">$docName</div>
                                  </li>";

                continue;
            }

        }

        return $dir_html . $file_html;

    }

}