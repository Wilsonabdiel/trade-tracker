@php
    use Illuminate\Support\Facades\Auth;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add to Journal') }}
        </h2>
    </x-slot>

    <x-form-section
        title="Add Trade"
        description="One trade at a time to mastery."
        submit="Submit"
    >

    </x-form-section>

</x-app-layout>
