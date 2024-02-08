@extends('layouts.main')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts

@endpush

@section('container')

<div class="main-container container-fluid">

    <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
        </div>
    </div>

    <div class="card">

        @livewire('table-components')

    </div>

</div>

@endsection