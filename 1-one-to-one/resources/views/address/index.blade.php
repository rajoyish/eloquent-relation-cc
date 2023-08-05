<style>
    a {
        text-decoration: none;
    }

    a:hover {
        color: red;
    }
</style>

@if ($user->address)
<h1>
    {{ $user->address->line_1 }}
</h1>
    <div style="display: flex; gap: 1rem;">
        <a href="/address/edit">✏️ Edit</a>
        <form action="/address" method="POST">
            @csrf
            @method('DELETE')
            <button>🗑️ Delete</button>
        </form>
    </div>

<h3>{{ $user->name }}</h3>
@endif

<h4>
    <a href="/address/create">📌 Create an Address</a>
</h4>
