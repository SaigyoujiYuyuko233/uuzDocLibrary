<?php
/**
 * ProjectName: uuzDocLibrary.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/5/11
 * Time: 10:21
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

namespace App\Parser;

class DirParser{

    /**
     * 获取整个目录树
     *
     * @param $path
     * @return array
     */

    public function getDirectoryTree($path){

        // 目录树
        $directoryTree = array();

        // 文件树
        $fileTree = array();

        // 扫描整个根目录
        $dir = scandir($path);

        // 递归
        for ($i = 2; $i < count($dir); $i++){
            $filepath = $path . "/" . $dir[$i];
            $filename = $dir[$i];

            // 如果是目录 - 进一步扫描
            if (is_dir($filepath) == true){
                $subDirectoryTree = $this->readDir($filepath);
                $directoryTree[$filename] = $subDirectoryTree;

                continue;
            }

            // 是文件 - 并入数组
            if (is_file($filepath) == true){
                $fileTree[$i - 2] = $filename;

                continue;
            }

        }

        // 返回
        return array_merge($directoryTree, $fileTree);

    }


    /**
     * 扫描目录
     *
     * @param $path
     * @return array $subDirectoryTree
     */

    private function readDir($path){

        // 目录树
        $directoryTree = array();

        // 文件树
        $fileTree = array();

        $dir = scandir($path);

        // 递归
        for ($i = 2; $i < count($dir); $i++){
            $filepath = $path . "/" . $dir[$i];
            $filename = $dir[$i];

            // 如果是目录 - 进一步扫描
            if (is_dir($filepath) == true){
                $tree = $this->readDir($filepath);
                $directoryTree[$filename] = $tree;

                continue;
            }

            // 是文件 - 并入数组
            if (is_file($filepath) == true){
                $fileTree[$i - 2] = $filename;

                continue;
            }
        }

        return array_merge($directoryTree, $fileTree);
    }

}