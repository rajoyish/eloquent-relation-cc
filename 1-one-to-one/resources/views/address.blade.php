@if ($user->address)
<h1>{{ $user->address->line_1 }}</h1>
<h3>{{ $user->name }}</h3>
@endif
