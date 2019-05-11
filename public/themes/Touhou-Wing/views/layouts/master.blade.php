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
    <title>@yield("action") | {{ env("APP_NAME") }}</title>

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
            background-image: url("{{ asset("/images/background-images/") . rand(1,2) . ".jpg" }}");
            background-repeat: no-repeat;
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
    <div class="logo mdui-col-md-12 logo mdui-col-sm-0" style="border-bottom: rgba(229,229,229,0.94) 1px solid;">
        <div class="img-control">
            <img style="width: 100%;" src="{{ asset("/favicon.png") }}">
            <p style="text-align: center; font-size: 24px; margin-top: 12px; margin-bottom: 6px;">{{ env("APP_NAME") }}</p>
        </div>

    </div>

    <div class="mdui-collapse" mdui-collapse>
        <ul class="mdui-list" mdui-collapse="{accordion: false}">
            {!! $doc_list !!}
        </ul>
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

        var nodeParents = $(".mdui-list-item[value='" + val + "']").parents();
        var finder=new RegExp('path=');
        var path = "";

        for (var i = 0; i < nodeParents.length; i++){

            // 判断是否带有 path= 标识符
            if (finder.test(nodeParents[i].id) == true){
                path += nodeParents[i].id.replace("path=","") + "|";
            }

        }

        // 加上文件名
        path += val;

        // 跳转
        window.location.href = '/uuzDoc/read/' + path;
    };
</script>

<div class="frame">
    @yield("content")
</div>

</body>
</html>