@extends('layouts.app')
@section('content')
    <style>
        .elementsTri{
            float: left;
            margin: 10px;
            background-color: brown;
        }
        #element1{
            margin-top: 30px;
            width: 60%;
        }
        #element2{
            margin-top: 30px;
            width: 10%;
        }
    </style>
    <div class="elementsTri">
        @extends('templates.navigation')   
    </div>
    <div class="elementsTri" id="element1">
        @yield('element1')
    </div>
    <div class="elementsTri" id="element2">
        @yield('element2')
    </div>
    
@endsection
