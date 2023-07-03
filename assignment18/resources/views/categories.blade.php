
@foreach ($categories as $category)
    <div>
        <h2>{{ $category->name }}</h2>
        @if ($category->latestPost)
            <p>Latest Post:</p>
            <h3>{{ $category->latestPost->title }}</h3>
            <p>{{ $category->latestPost->content }}</p>
        @else
            <p>No posts found.</p>
        @endif
    </div>
@endforeach
