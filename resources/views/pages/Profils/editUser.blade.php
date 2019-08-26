@extends('templates.base')
@section('element1')

    <style>
       #form{
           margin-top: 80px;
       }
       #boutonVld{
           float: right;
           width: 10%;
       }
    </style>

    <div class="container">
         @foreach ($users as $user)
            <form action="{{route('User.update', $user->id)}}" method="PUT" id="form">
                <div class="row">
                    <div class="col-3"><label for="name">Nom d'utilisateur</label></div>
                    <div class="col-8">
                            <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"><label for="password">Mot de passe</label></div>
                    <div class="col-8">
                        <input type="text" name="password" id="password" value="{{ $user->password }} " class="form-control">
                    </div>    
                </div>

                
                    <button type="submit" class="btn btn-success" id="boutonVld">Modifier</button>
                
            
            </form>
    @endforeach

    </div>
@endsection