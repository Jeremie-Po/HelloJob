@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :width='100'/>
    </div>

    <div class="flex flex-1 flex-col">
        <a href='/' class="text-gray-400 text-sm">{{ $job->employer->name }}</a>
        <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">
            <a href="{{ $job->url }}">{{ $job->title }}</a>
        </h3>
        <p class="mt-auto">{{ $job->salary }}</p>
    </div>

    <div class="space-x-2">
        @foreach($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>
</x-panel>