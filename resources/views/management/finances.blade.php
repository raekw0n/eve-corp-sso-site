@extends('layouts.app')

@section('additional_styles')
@endsection

@section('content')
    <div id="finances">
        <div class="container py-2">
            <div class="row mt-3">
                <div class="col-12">
                    <h1>{{ config('app.name') }} Financial Management</h1>
                </div>
            </div>
            <hr>
            @include('partials.management.balances')
            @include('partials.management.ledger')
        </div>
    </div>
@endsection

@section('additional_scripts')
@endsection

