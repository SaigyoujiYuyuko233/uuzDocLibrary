<?php
/**
 * ProjectName: uuzDocLibrary.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/5/11
 * Time: 18:33
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */
?>

@extends("layouts.container")

@section("action") 404 @endsection

@section("content")
    <div class="mdui-valign mdui-center" style="background-image: url('{{ asset("/images/404.jpg") }}');height: 100%; width: 100%;">
        <div class="404 mdui-container" style="margin-bottom: 120px; ">
            <h1 style="display: block; text-align: center; font-size: 40px;" class="mdui-text-color-pink-a400">404 - 这个文档被我吃了</h1>
            <button class="mdui-btn mdui-btn-block mdui-color-red-500 mdui-ripple" onclick="window.parent.location.href='/'">返回首页</button>
        </div>
    </div>
@endsection
