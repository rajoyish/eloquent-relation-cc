<div>
    @foreach ($files as $file)
        <h4>{{ $file->filename }}</h4>
        <ul>
            <li>From {{ $file->project->title }}</li>
        </ul>
    @endforeach
</div>
