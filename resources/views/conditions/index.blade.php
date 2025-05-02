@extends('layouts.app')

@section('content')
    <x-split-view>
        <x-slot:sidebar>
            <input type="text" class="form-control mb-3" placeholder="Search..." id="searchBox">

            <ul class="list-group" id="conditionList">
                @foreach ($conditions as $condition)
                    <li class="list-group-item list-group-item-dark d-flex justify-content-between align-items-center condition-item"
                        data-id="{{ $condition->id }}">
                        <span>{{ $condition->name }}</span>
                        <span class="badge bg-info">{{ $condition->type }}</span>
                    </li>
                @endforeach
            </ul>

            <script id="conditionsData" type="application/json">
                {!! json_encode($conditions) !!}
            </script>
        </x-slot:sidebar>


        <x-slot:details>
            <div id="conditionDetails" class="text-light">
                <h4>Select a condition to view details</h4>
            </div>
        </x-slot:details>
    </x-split-view>


    @vite(['resources/js/condition.js']) {{-- Suponiendo que compilaste con Vite --}}
@endsection
