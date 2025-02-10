<x-layout>
    <x-page-heading>
        Create a new job
    </x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" value="test"/>
        <x-forms.input label="Description" name="description" value="blabla"/>
        <x-forms.input label="Salary" name="salary" value="12345678"/>
        <x-forms.input label="Location" name="location" value="lyon"/>

        <x-forms.select label="schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.checkbox label='Feature' name="featured"/>

        <x-forms.input label="url" name="url" value="http://localhost/jobs/create"/>

        <x-forms.divider/>

        <x-forms.input label="tags (comma separated)" name="tags" value="front,back,fullstack"/>


        <x-forms.button>Create New Job</x-forms.button>
    </x-forms.form>
</x-layout>