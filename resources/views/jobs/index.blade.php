<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <H1 class="text-4xl">Lets Find Your Next Job </H1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..."
                       class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>

        <section class="pt-6">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
                @foreach($featuredJobs as $job)
                    <x-job-card :job="$job"/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-4 space-x-2">
                @foreach($tags as $tag)
                    <x-tag :tag="$tag"/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="space-y-6 mt-6">
                @foreach($jobs as $job)
                    <x-job-card-wild :job="$job"/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>