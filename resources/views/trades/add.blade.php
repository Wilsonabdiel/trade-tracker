@php
    use Illuminate\Support\Facades\Auth;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add to Journal') }}
        </h2>
    </x-slot>
    @php
        $form = [
            [
                'type' => 'input',
                'name' => 'title',
                'label' => 'Title',
                'attributes' => ['class' => 'form-control'],
            ],
            [
                'type' => 'textarea',
                'name' => 'content',
                'label' => 'Content',
                'attributes' => ['class' => 'form-control'],
            ],
            // Add more fields as needed
        ];

        $your_form_actions = [
        // Define your actions here, for example:
        'submit' => [
            'label' => 'Save',
            'attributes' => [
                'type' => 'submit',
                'class' => 'btn btn-primary',
            ],
        ],
        'cancel' => [
            'label' => 'Cancel',
            'url' => route('trades.index'),
            'attributes' => [
                'type' => 'button',
                'class' => 'btn btn-secondary',
            ],
        ],
    ];
    @endphp

    @include('components.form-section', [
        'submit' => 'your_submit_function_name',
        'title' => 'Add Journal Entry',
        'description' => 'Write down your thoughts and experiences.',
        'form' => $form,
        'actions' => '', // Replace with your specific actions if needed
    ])
</x-app-layout>
