<x-layout>
    <x-page-heading>
        Register
    </x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="name" name="name"/>
        <x-forms.input label="mail" name="mail" type="email"/>
        <x-forms.input label="password" name="password" type="password"/>
        <x-forms.input label="password confirmation" name="password_confirmation" type="password"/>

        <x-forms.divider/>

        <x-forms.input label="Employer name" name="employer"/>
        <x-forms.input label="Employer logo" name="logo" type="file"/>

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>