@extends('layouts.base')

@section('body')
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>
@endsection