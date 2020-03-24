@extends('layouts.app')

@section('title', $topic->title)
@section('description', $topic->excerpt)

@section('content')

    <div class="col-group">
        <div class="col-8" id="main">
            <div class="res-cons">
                <article class="post">
                    <header>
                        <h1 class="post-title">{{ $topic->title }}</h1>
                    </header>
                    <div class="post-content">{!! $topic->body !!}</div>
                </article>
            </div>
        </div>
    </div>
{{--    @include('layouts._right')--}}

{{--    <div class="row">--}}

{{--        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 topic-content">--}}
{{--            <div class="card ">--}}
{{--                <div class="card-body">--}}
{{--                    <h1 class="text-center mt-3 mb-3">--}}
{{--                        {{ $topic->title }}--}}
{{--                    </h1>--}}

{{--                    <div class="article-meta text-center text-secondary">--}}
{{--                        {{ $topic->created_at }}--}}
{{--                    </div>--}}

{{--                    <div class="topic-body mt- mb-4">--}}
{{--                        {!! $topic->body !!}--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@stop
