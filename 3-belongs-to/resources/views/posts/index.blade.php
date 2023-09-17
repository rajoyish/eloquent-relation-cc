@foreach ($posts as $post)
<h1>
    {{ $post->user->name }} said:
</h1>
    <div>
        {{ $post->id }} : {{ Str::limit($post->body, 50, '...') }}
    </div>
@endforeach
