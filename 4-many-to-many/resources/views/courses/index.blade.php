<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($courses as $course)
                        <div>
                            @foreach ($course->topics as $topic)
                                <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">
                                    {{ $topic->title }} @if ($topic->pivot->version)
                                        (v{{ $topic->pivot->version }})
                                    @endif
                                </span>
                            @endforeach
                            <h2 class="text-lg font-bold mb-4 hover:underline hover:text-blue-500 hover:cursor-pointer">
                                {{ $course->title }}
                            </h2>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
