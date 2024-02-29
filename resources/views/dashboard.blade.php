@php
    use Illuminate\Support\Facades\Auth;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="home">
        <div>
{{--            <img src="{{url('../images/chart.png')}}" alt="Hi Image" loading="lazy"> --}}


        </div>
        <div>
            <a href="{{route("trades.add")}}">
            <x-button>
                Add to Journal
            </x-button></a>
{{--            <form method="post" action="">--}}
{{--                --}}
{{--            </form>--}}
        </div>

    </section>

</x-app-layout>
