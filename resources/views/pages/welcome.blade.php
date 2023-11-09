@extends('layouts.layout01')

@push('content-css')
    <style>
        .card-header {
            background-color: green;
            color: white;
        }

        .btn-primary {
            background-color: green;
        }
    </style>
@endpush

@section('content')
    <div class="card">
        <div class="card-header">
            Home Page
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection
