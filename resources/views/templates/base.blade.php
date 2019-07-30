@extends('layouts.app')
@section('content')
    <style>
        .elementsTri{
            float: left;
            width: 60%;
            margin: 10px;
        }
    </style>
    <div class="elementsTri">
        @extends('templates.navigation')   
    </div>
    <div class="elementsTri">
        @yield('element1')
    </div>
    <div class="elementsTri">
        @yield('element2')
    </div>
    
@endsection
