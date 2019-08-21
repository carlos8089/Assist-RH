@extends('templates.base')

@section('element1')
    <style>
        .main{
        padding: 20px;
        background-color: #ffffff;
        overflow: auto;
        
        }
    </style>
    <div class="main">
        <h3>Liste des employés</h3>
        <div class="container">
            
                @foreach ($employes as $employe)
                    <div>
                            <?= $employe ?>
                    </div>
                @endforeach
            
        </div>
    </div>
@endsection