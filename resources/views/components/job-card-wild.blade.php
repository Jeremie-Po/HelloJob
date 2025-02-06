@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :width='100'/>
    </div>

    <div class="flex flex-1 flex-col">
        <a href='/' class="text-gray-400 text-sm">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">{{ $job->title }}</h3>
        <p class="mt-auto">f{{ $job->salary }}/p>
    </div>

    <div class="space-x-2">
        @foreach($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>
</x-panel>