<nav>
    <ul>
        <li @style([
            'background-color:yellow' => $active === 'all'
        ]) ><a href="{{ route('posts.index') }}">All Posts</a></li>
        <li @style([
            'background-color:yellow' => $active === 'create'
        ])><a href="{{ route('posts.create') }}">Create Post</a></li>
    </ul>
</nav>