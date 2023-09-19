<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Topics') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 pt-6 font-bold">
                    {{ $course->title }}
                </div>
                <form action="{{ route('courses.topics.name', $course) }}" method="POST">
                    @csrf
                    <div class="p-6 text-gray-900">
                        <label for="topic_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Select topics
                        </label>
                        <select id="topic_id" name="topic_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($topics as $topic)
                                <option value="{{ $topic->id }}">{{ $topic->title }}</option>
                            @endforeach
                        </select>
                        <div class="mt-4">
                            <x-input-label for="version" :value="__('Version')" />
                            <x-text-input id="version" name="version" type="text" class="mt-1" />
                        </div>
                        <x-primary-button class="mt-4">Attach</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
