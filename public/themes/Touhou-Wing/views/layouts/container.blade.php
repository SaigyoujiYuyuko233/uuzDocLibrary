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

        .md-container {
            box-sizing: border-box;
            min-width: 200px;
            max-width: 980px;
            margin: 0 auto;
            padding: 45px;
        }

        .markdown-body{
            background-color: rgba(251,251,251,0.94);
            opacity: 0.9;

            border: rgba(232,232,232,0.94) 1px solid;

            padding: 12px 12px 24px 12px;
            border-radius: 4px;
        }

        @media (max-width: 767px) {
            .md-container {
                padding: 15px;
            }
        }

        /*背景图片切换 - 根据设备大小*/
        @media (max-width: 767px) {
            body{

                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100%;
                background-image: url("{{ asset("/images/background-images/m-") . rand(1,2) . ".png" }}");
            }
        }
        
        @media (min-width: 1024px) {
            body{
                background-image: url("{{ asset("/images/background-images/") . rand(1,2) . ".png" }}");
            }
        }

        .docx table {
            border-collapse:collapse;
        }

        .docx th {
            text-align: left;
            text-transform: none;
        }

        .docx td, th {
            vertical-align:top;
            background-clip:padding-box;
            border:1px solid #000000;
            color: #414042;
            height: 34px;
            padding-left: 6px;
            position: relative;
        }

        .docx td.has_subcell  {
            padding-left:0;
        }

        .docx table table {
            width:100%;
        }

        .docx td td {
            height:72px;
            border:none;
            border-bottom:1px solid black;
            min-width:110px;
        }

        .docx td table tr:last-of-type td {
            border-bottom:0;
        }

        .docx span.indent {
            padding-left:36px;
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