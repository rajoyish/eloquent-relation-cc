@foreach ($discussions as $discussion)
    <div>
        <h3>{{ $discussion->title }}</h3>
        <ul>
            <li>Latest Post by {{ $discussion->latestPost->user->name }}</li>
        </ul>
    </div>
    <hr>
@endforeach
