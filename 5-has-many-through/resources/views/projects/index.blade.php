@foreach ($projects as $project)
    <div>
        <h3>{{ $project->title }}</h3>
    </div>
    @foreach ($project->files as $file)
        <ul>
            <li>{{ $file->filename }}</li>
        </ul>
    @endforeach
@endforeach
