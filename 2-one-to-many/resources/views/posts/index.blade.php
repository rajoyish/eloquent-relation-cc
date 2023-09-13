{{-- <div>
    {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} <hr>
</div>
@foreach ($posts as $post)
    <div>
        {{ $post->id }} : {{ $post->body }}
    </div>
@endforeach --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/posts" method="POST">
                        @csrf
                        <div>
                            <textarea name="body" id="body"></textarea>
                        </div>
                        <div>
                            <x-primary-button type="submit">Post</x-primary-button>
                        </div>
                    </form>

                    <section>
                        @foreach ($posts as $post)
                            <div class="my-4">
                                <p class="mb-2">
                                    {{ $post->id }}: {{ $post->body }}
                                </p>
                                @can('delete', $post)
                                <form action="/posts/{{ $post->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button type="submit">Delete</x-danger-button>
                                </form>
                                @endcan
                            </div>
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
