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

    <link href="https://cdn.bootcss.com/mdui/0.4.2/css/mdui.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/github-markdown-css/3.0.1/github-markdown.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/limonte-sweetalert2/7.33.0/sweetalert2.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:300|Raleway:300" rel="stylesheet">

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

        .markdown-body {
            box-sizing: border-box;
            min-width: 200px;
            max-width: 980px;
            margin: 0 auto;
            padding: 45px;
        }

        @media (max-width: 767px) {
            .markdown-body {
                padding: 15px;
            }
        }
    </style>

    @yield("header")
</head>

<body>

<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/mdui/0.4.2/js/mdui.min.js"></script>
<script src="https://cdn.bootcss.com/limonte-sweetalert2/7.33.0/sweetalert2.all.js"></script>

<script>
    $(document).ready(function () {
        $("title", top.window.document)[0].innerHTML = "@yield("action") | {{ env("APP_NAME") }}";
    });
</script>

<div class="frame">
    @yield("content")
</div>

</body>
</html>