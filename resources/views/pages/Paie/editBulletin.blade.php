@extends('templates.base')

@section('element1')
    <style>
        .container{
            margin-bottom: 23px;
        }
    </style>
        <div class="container">
            @foreach ($bulletins as $bulletin)
                <form action="{{route('bulletin.update',[ $bulletin->id ])}}" method="PUT">
                    <div class="row">
                        <div class="col-3"><label for=""></label></div>
                        <div class="col-6">
                            <input type="text" name="" id="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3"><label for=""></label></div>
                        <div class="col-6">
                            <input type="text" name="" id="">
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    
@endsection