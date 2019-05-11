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
    <div class="markdown-body">
        {!! $markdown !!}
    </div>
@endsection