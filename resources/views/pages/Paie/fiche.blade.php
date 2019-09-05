@extends('templates.base')
@section('element1')
<style>
        .principal{
            padding: 20px;
            background-color: #ffffff;
            overflow: auto;
            
        }
        .a{
            width: 100%;
            margin-bottom: 10px;
            height: 50px;
            font-size: 1.5em;
        }
    </style>
        <div class="principal">
            <H2>Gérer la paie des salariés</H2>
            <br>
            <div class="col">
                <div class="col-5">
                        <a id="create_bulletin" class="btn btn-primary a" role="button" href="{{route('creationBulletin')}}"> Créer un nouveau bulletin </a>
                </div>
                <div class="col-5">
                        <a id="create_bulletin" class="btn btn-primary a" role="button" href="{{route('bulletin.index')}}">Editer un bulletin existant</a>
                </div>
                <div class="col-5">
                        <a id="create_bulletin" class="btn btn-primary a" role="button" href="{{route('supBulletin')}}">Supprimer un bulletin</a>
                </div>

            </div>
            
            
           
        
        </div> 
@endsection

