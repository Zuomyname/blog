@extends('layouts.app')

@section('content')
    <div class="col-group">
        <div class="clo-8" id="main">
            <div class="res-cons">
                @foreach($topics as $topic)
                    <article class="post">
                        <header>
                            <h2 class="post-title">
                                <a href="{{ route('topics.show', ['id' => $topic->id]) }}">{{ $topic->title }}</a>
                            </h2>
                        </header>
                        <p class="post-meta meta-date">{{ $topic->created_at }}</p>
                        <div class="post-meta meta-category">
                            |
                            <a href="#">{{ $topic->category->name }}</a>
                        </div>
                        <div class="post-content">
                            <p>{{ mb_substr($topic->body, 0, 50) }}</p>
                        </div>
                        <p class="readmore clearfix">
                            <a href="#">阅读全文</a>
                        </p>
                        <p style="border-bottom:1px solid #eee"></p>
                    </article>
                @endforeach
                {!! $topics->appends(Request::except('page'))->render() !!}
            </div>
        </div>
{{--        @include('layouts._right')--}}

@endsection
