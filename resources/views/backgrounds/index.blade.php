@extends('layouts.app')

@section('content')
    <x-split-view>
        <x-slot:sidebar>
            <input type="text" class="form-control mb-3" placeholder="Search..." id="searchBox">

            <ul class="list-group" id="backgroundList">
                @foreach ($backgrounds as $background)
                    <li class="list-group-item list-group-item-dark d-flex justify-content-between align-items-center background-item" data-id="{{ $background->id }}">
                        <span>{{ $background->name }}</span>
                    </li>
                @endforeach
            </ul>
            <script id="backgroundsData" type="application/json">
                {!! json_encode($backgrounds) !!}
            </script>
        </x-slot:sidebar>

        <x-slot:details>
            <div id="backgroundDetails" class="text-light">
                <h4>Select a background to view details</h4>
            </div>
        </x-slot:details>
    </x-split-view>

    @vite(['resources/js/background.js'])
@endsection
