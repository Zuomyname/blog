@if (count($topics))
    <ul class="list-unstyled">
        @foreach ($topics as $topic)
            <li>
                <div class="post-title">{{ $topic->title }}</div>
                <div>时间文件</div>
                <div>描述</div>
            </li>
            @if ( ! $loop->last)
                <hr>
            @endif

        @endforeach
    </ul>

@else
    <div class="empty-block">暂无数据 ~_~ </div>
@endif
