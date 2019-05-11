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
    <title> {{ env("APP_NAME") }} - @yield("action")</title>

    <link href="https://cdn.bootcss.com/mdui/0.4.2/css/mdui.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/limonte-sweetalert2/7.33.0/sweetalert2.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:300|Raleway:300" rel="stylesheet">

    <link href="{{ asset("/favicon.png") }}" rel="icon">

    <meta name="viewport" content="width=device-width"><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <style>
        body{
            font-family: 'Noto Sans SC', sans-serif;

            background-color: rgba(249,249,249,0.94);
            background-image: url("{{ asset("/images/") }}");
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
    <div class="logo" style="border-bottom: rgba(229,229,229,0.94) 1px solid;">
        <img style="width: 100%;" src="{{ asset("/favicon.png") }}">
        <p>{{ env("APP_NAME") }}</p>
    </div>

    <ul class="mdui-list" mdui-collapse="{accordion: true}">
        {!! $doc_list !!}
    </ul>

</div>

<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/mdui/0.4.2/js/mdui.min.js"></script>
<script src="https://cdn.bootcss.com/limonte-sweetalert2/7.33.0/sweetalert2.all.js"></script>

<script>
    $(document).ready(function () {
        var inst = new mdui.Collapse(selector, options);
    });
</script>

<div class="frame">
    @yield("content")

    <pre>{{ print_r((new \App\Parser\DirParser())->getDirectoryTree(APP_ROOT . env("DOC_PATH"))) }}</pre>
</div>

</body>
</html>