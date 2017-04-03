@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <ul class="list-group">
                @if(count($articles))
                    @foreach($articles as $article)
                        <li class="list-group-item">
                            <a href="{{ route('articles.show',$article->uuid) }}">{{ $article->title }}</a>
                            <span class="pull-right icon-span">
                                <i class="fa fa-eye">
                                    {{ $article->viewnum }}
                                </i>
                            </span>
                            <span class="pull-right icon-span">
                                <i class="fa fa-tag">
                                    @if($article->column === 'bugs')
                                        八阿哥
                                    @endif
                                    @if($article->column === 'drops')
                                        知识库
                                    @endif
                                </i>
                            </span>
                            <span class="pull-right icon-span">
                                <i class="fa fa-user">
                                    {{ $article->author }}
                                </i>
                            </span>
                        </li>
                    @endforeach
                @else
                    <li class="list-group-item text-center">
                        没有任何数据~~
                    </li>
                @endif
            </ul>
            <div class="col-md-12 text-center">
                {{ $articles->appends(['keyword' => session('keyword')])->links() }}
            </div>
        </div>
    </div>
@endsection