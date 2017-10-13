@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="content-wrap">
                <div class="title text-center">
                    <h3>{{ $article->title }}</h3>
                    <span class="icon-span">
                        作者：{{ $article->author }}
                    </span>
                    <span class="icon-span">
                        阅读：{{ $article->viewnum }}
                    </span>
                    <span class="icon-span">
                        <a href="javascript:self.location=document.referrer;">返回列表</a>
                    </span>
                </div>
                <hr>
                <div class="content">
                    {!! $article->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection