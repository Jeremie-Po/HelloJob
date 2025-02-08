<x-layout>
    <x-page-heading>
        Register
    </x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="name" name="name" value="jérémie"/>
        <x-forms.input label="email" name="email" type="email" value="jpourageaux@hotmail.fr"/>
        <x-forms.input label="password" name="password" type="password" value="password"/>
        <x-forms.input label="password confirmation" name="password_confirmation" type="password" value="password"/>

        <x-forms.divider/>

        <x-forms.input label="Employer name" name="employer" value="mojo"/>
        <x-forms.input label="Employer logo" name="logo" type="file"/>

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>