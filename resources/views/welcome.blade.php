<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-4 space-x-2">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="space-y-6 mt-6">
                <x-job-card-wild/>
                <x-job-card-wild/>
                <x-job-card-wild/>
                <x-job-card-wild/>
            </div>
        </section>
    </div>
</x-layout>