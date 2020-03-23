@if (count($topics))
    <ul class="list-unstyled">
        @foreach ($topics as $topic)
            <li class="media">
{{--                <div class="media-left">--}}
{{--                    <a href="{{ route('users.show', [$topic->user_id]) }}">--}}
{{--                        <img class="media-object img-thumbnail mr-3" style="width: 52px; height: 52px;" src="{{ $topic->user->avatar }}" title="{{ $topic->user->name }}">--}}
{{--                    </a>--}}
{{--                </div>--}}

                <div class="media-body">

                    <div class="media-heading mt-0 mb-1">
                        <h3>
                            <a href="{{ route('topics.show', [$topic->id]) }}" style="color: #555" title="{{ $topic->title }}">
                                {{ $topic->title }}
                            </a>
                        </h3>

{{--                        <a class="float-right" href="{{ route('topics.show', [$topic->id]) }}">--}}
{{--                            <span class="badge badge-secondary badge-pill"> {{ $topic->reply_count }} </span>--}}
{{--                        </a>--}}
                    </div>

                    <small class="media-body meta text-secondary">
                        <i class="far fa-clock"></i>
                        <span class="timeago" style="margin: 9px 0 0;color:#999;text-align: left;display: inline-block;font-size: 15px">{{ $topic->updated_at }}</span>
                        <span> | </span>
                        <div style="margin: 9px 0 0;color:#999;text-align: left;display: inline-block;font-size: 15px">
                            <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                            <a href="#" style="color: #999">{{ $topic->category->name }}</a>
                        </div>
{{--                        <span class="timeago" style="margin: 9px 0 0;color:#999;text-align: left;display: inline-block;font-size: 15px">{{ $topic->category->name }}</span>--}}
{{--                        <a class="text-secondary" href="#" title="{{ $topic->category->name }}">--}}
{{--                            <i class="far fa-folder"></i>--}}
{{--                            {{ $topic->category->name }}--}}
{{--                        </a>--}}

{{--                        <span> • </span>--}}
{{--                        <a class="text-secondary" href="{{ route('users.show', [$topic->user_id]) }}" title="{{ $topic->user->name }}">--}}
{{--                            <i class="far fa-user"></i>--}}
{{--                            {{ $topic->user->name }}--}}
{{--                        </a>--}}
{{--                        <span> • </span>--}}
{{--                        <i class="far fa-clock"></i>--}}
{{--                        <span class="timeago" title="最后活跃于：{{ $topic->updated_at }}">{{ $topic->updated_at->diffForHumans() }}</span>--}}
                    </small>
                    <div style="font-size: 1em;line-height: 1.7;color: #444;padding-top: 27px">
                       <p>{{ substr($topic->body, 0, 30) }}</p>
                    </div>

                </div>
            </li>

            @if ( ! $loop->last)
                <hr>
            @endif

        @endforeach
    </ul>

@else
    <div class="empty-block">暂无数据 ~_~ </div>
@endif
