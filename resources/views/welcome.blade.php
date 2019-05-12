@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-center">
                        <p class="mb-0">Welcome to {{ config('app.name') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
