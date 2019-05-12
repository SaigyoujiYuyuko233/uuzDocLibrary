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
    <div class="mdui-center" style="margin-top: 80px;">
        <div class="mdui-container">
            <div class="docx">
                <div class="title">
                    <h1 style="margin-bottom: 4px">{{ $docName }}</h1>
                    <div class="mdui-divider-dark" style="width: 65%;"></div>
                </div>

                {!! $docx !!}
            </div>
        </div>
    </div>
@endsection