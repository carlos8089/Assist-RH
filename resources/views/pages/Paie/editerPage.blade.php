@extends('templates.base')

@section('element1')
    <style>
        .container{
            margin-bottom: 23px;
        }
    </style>
        
    <div class="container">
        <div class=" header">
            <h4>Liste des bulletins</h4>
        </div>
        <table class=" table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <td>Matricule</td>
                    <td>Nom</td>
                    <td>Prenoms</td>
                    <td>Poste</td>
                    <td>Agence</td>
                    <td>Numero CNSS</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($bulletins as $bulletin)
                <tr>
                        <td>{{ $bulletin->id }}</td>
                        <td>{{ $bulletin->nomEmploye  }}</td>
                        <td>{{ $bulletin->prenomEmploye }}</td>
                        <td>{{ $bulletin->poste }}</td>
                        <td>{{ $bulletin->agence  }}</td>
                        <td>{{ $bulletin->agence  }}</td>
                        
                        <td><a href="{{route('bulletin.show',['id' => $bulletin->id ])}}" class="btn btn-info">Aperçu</a></td>
                        <td><a href="{{route('bulletin.edit',['id' => $bulletin->id ])}}" class=" btn btn-warning">Editer</a></td>
                        <td><a href="" class=" btn btn-danger">Imprimer</a></td>
                </tr>
                @endforeach
            </tbody>
           
        </table>
    </div>
@endsection