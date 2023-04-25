<div @style([
    'background-color:gray' => $loop->odd,
])>
    <h3>{{ $post['id'] }}. {{ $post['title'] }}</h3>
    <p>{{ $post['content'] }}</p>
    <a href="{{ route('posts.show', $post['id']) }}">Read more</a>
    <hr>
</div>
