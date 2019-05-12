<?php
/**
 * ProjectName: uuzDocLibrary.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/5/11
 * Time: 18:31
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */
?>


@extends("layouts.container")

@section("action") {{ $docName }} @endsection

@section("content")
    <div class="md-container">
        <div class="title">
            <h1 style="margin-bottom: 4px">{{ $docName }}</h1>
            <div class="mdui-divider-dark" style="margin-bottom: 30px; margin-top: 10px;"></div>
        </div>

        <div class="markdown-body">
            {!! $markdown !!}
        </div>
    </div>

@endsection