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
        submit="Submit"
        title="Add Trade"
        description="One trade at a time to mastery"
    >
        <form method="POST" action="{{ route('trades.store') }}">
            @csrf
            <!-- Text Input -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <!-- Email Input -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <!-- Password Input -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <!-- Checkbox -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check" name="check">
                <label class="form-check-label" for="check">Check me out</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </x-form-section>
</x-app-layout>
