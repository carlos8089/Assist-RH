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
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <td>Id</td>
                        <td>Nom</td>
                        <td>Prenoms</td>
                        <td>Sexe</td>
                        <td>Numero matricule</td>
                        <td>Poste</td>
                        <td>Agence</td>
                        <td>Contrat</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $employes as $employe )
                        <tr>
                            <td>{{ $employe->id }}</td>
                            <td>{{ $employe->nom }}</td>
                            <td>{{ $employe->prenom }}</td>
                            <td>{{ $employe->sexe }}</td>
                            <td>{{ $employe->numMat }}</td>
                            <td>{{ $employe->poste }}</td>
                            <td>{{ $employe->agence }}</td>
                            <td>{{ $employe->contrat }}</td>
                            <td><a href="{{route('employe.show',['id' => $employe->id ])}}" class=" btn btn-info">Voir</a></td>
                            <td><a href="{{route('employe.edit',['id' => $employe->id ])}}" class=" btn btn-warning">Modifier</a></td>
                            <td><a href="{{route('employe.destroy',['id' => $employe->id ])}}" class="btn btn-danger">Supprimer</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $employes->links() }}
        </div>
    </div>
@endsection