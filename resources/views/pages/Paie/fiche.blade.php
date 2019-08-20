@extends('templates.base')
@section('element1')
<style>
        .principal{
            padding: 20px;
            background-color: #ffffff;
            overflow: auto;
            
        }
    </style>
        <div class="principal">
            <H2>Gérer la paie des salariés</H2>
            <br>
            <a id="create_bulletin" class="btn btn-primary" role="button" href="{{route('bulletin.create')}}">Créer un nouveau bulletin</a>
            <a id="create_bulletin" class="btn btn-primary" role="button" href="{{route('personnel')}}">Editer un bulletin existant</a>
            <a id="create_bulletin" class="btn btn-primary" role="button" href="{{route('personnel')}}">Supprimer un bulletin</a>
        
        </div> 
@endsection

