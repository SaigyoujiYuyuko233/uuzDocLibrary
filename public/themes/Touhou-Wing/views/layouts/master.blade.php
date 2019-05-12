<?php
/**
 * ProjectName: uuzDocLibrary.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/5/10
 * Time: 21:02
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */
?>

<html lang="zh-cn">
<head>
    <title>{{ env("APP_NAME") }}</title>

    <link href="https://cdn.bootcss.com/mdui/0.4.2/css/mdui.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/github-markdown-css/3.0.1/github-markdown.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/limonte-sweetalert2/7.33.0/sweetalert2.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:300|Raleway:300" rel="stylesheet">

    <link href="{{ asset("/favicon.png") }}" rel="icon">

    <meta name="viewport" content="width=device-width"><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <style>
        body{
            font-family: 'Noto Sans SC', sans-serif;

            background-color: rgba(249,249,249,0.94);
        }

        a{
            text-decoration: none;
        }

        ::-webkit-scrollbar{
            width: 4px;
        }

        ::-webkit-scrollbar-thumb{
            background: #1396FF;
        }

        .mdui-collapse-item-body .mdui-list-item{
            padding-left: 30px !important;
        }

        .mdui-list-item-content{
            margin-left: 8px !important;
        }
    </style>

    @yield("header")
</head>

<body class="mdui-drawer-body-left">

<div class="mdui-appbar mdui-shadow-0">
    <div class="mdui-toolbar" style="border-bottom: rgba(229,229,229,0.94) 1px solid;">
        <a href="javascript:;" mdui-drawer="{target: '#doc-list'}" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">menu</i></a>
        <a href="javascript:;" class="mdui-typo-title">{{ env("APP_NAME") }}</a>
    </div>
</div>

<div class="mdui-drawer" style="border-right: 1px solid rgba(229,229,229,0.94); overflow: auto;" id="doc-list">
    <div class="logo" style="border-bottom: rgba(229,229,229,0.94) 1px solid;">
        <div class="img-control">
            <img style="width: 100%;" src="{{ asset("/favicon.png") }}">
            <p style="text-align: center; font-size: 24px; margin-top: 12px; margin-bottom: 2px;">{{ env("APP_NAME") }}</p>
            <p style="text-align: center; font-size: 14px; margin-top: 2px; margin-bottom: 6px;" class="mdui-typo">
                © 2019 - {{ date("Y", time()) }} <a href="https://github.com/SaigyoujiYuyuko233">SaigyoujiYuyuko</a>
            </p>
        </div>

    </div>

    <div>
        <div class="mdui-collapse" mdui-collapse>
            <ul class="mdui-list" mdui-collapse="{accordion: false}" style="overflow-x: scroll;">
                <?php $dirTree = (new \App\Parser\DirParser())->getDirectoryTree(APP_ROOT . env("DOC_PATH")) ?>
                {!! (new \App\Parser\DocListParser())->htmlParser($dirTree) !!}
            </ul>
        </div>
    </div>


    <div class="bottom-bar mdui-typo" style="position: relative; bottom: 0; width: 100%;">

        <div class="link-bar" style="text-align: center">
            <p style="margin-bottom: 2px;"><a href="https://th-res.yoyoko233.top:9000/">东方万物集</a></p>
            <p style="margin-bottom: 2px;">开源地址:<a href="https://github.com/SaigyoujiYuyuko233/uuzDocLibrary">uuzDocLibrary</a> - GPLv3</p>
        </div>

        <div class="information mdui-valign" style="font-size: 14px; height: 38px; border-top: rgba(229,229,229,0.94) 1px solid;">
            <div style="width: 100%; padding-left: 4px; padding-right: 4px;">
                <p style="display: inline-block; margin: 0; width: 50%;" class="time-used"><i class="mdui-icon material-icons">&#xe425;</i> {{ round(microtime(true) - APP_START,3) }}ms</p>
                <p style="display: inline-block; text-align: right; width: 49%; margin: 0;"><i class="mdui-icon material-icons">&#xe163;</i> {{ APP_VERSION . "." .APP_ISSUE }}</p>
            </div>
        </div>

    </div>


</div>

<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/mdui/0.4.2/js/mdui.min.js"></script>
<script src="https://cdn.bootcss.com/limonte-sweetalert2/7.33.0/sweetalert2.all.js"></script>

<script>
    $(document).ready(function () {
        mdui.mutation();
    });

    function doc(val) {

        let nodeParents = $(".mdui-list-item[value='" + val + "']").parents();
        let finder=new RegExp('path=');
        let path = "";

        for (let i = nodeParents.length - 1; i >= 0; i--){

            // 判断标签 ul only
            if (nodeParents[i].localName === "ul"){
                // 判断是否带有 path= 标识符
                if (finder.test(nodeParents[i].id) === true){
                    path += nodeParents[i].id.replace("path=","") + "|";
                }
            }

        }

        // 加上文件名
        path += val;

        // 跳转
        $(".iframe").attr("src", '/uuzDoc/read/' + path);
    };
</script>

<div class="frame" style="overflow: auto;">
    <iframe class="iframe" src="/home" style="border: 0; height: calc(100% - 64px); width: 100%;">

    </iframe>
</div>

</body>
</html>