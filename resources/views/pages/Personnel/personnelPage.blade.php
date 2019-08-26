@extends('templates.base')

@section('element1')
    <style>
        .container{
            margin-bottom: 23px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-3">
                        <a href="{{route('employe.create')}}"  class="btn btn-primary" >Créer un nouveau salarié</a>
            </div>
            <div class="col-6">
            <form action="{{route('employe.index')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <input class="form-control" type="text" placeholder="nom / numero matricule" id="rechercherInput" name="inpRechercher">
                        </div>
                        <div class="col-">
                            <input  type="submit" class="btn btn-warning" value="Rechercher">
                        </div>     
                               
                    </div>
                                                
                </form>
            </div>
            <div class="col-3">
                        <a href="{{route('employe.index')}}" id="liste" class="btn btn-primary">Liste des salariés</a>
            </div> 
        </div>
    </div>
        
    

    <div class="container">
        <table class=" table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <td>Id</td>
                    <td>Nom</td>
                    <td>Prenoms</td>
                    <td>Poste</td>
                    <td>Agence</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($employes as $employe)
                <tr>
                        <td>{{ $employe->id }}</td>
                        <td>{{ $employe->nom  }}</td>
                        <td>{{ $employe->prenom }}</td>
                        <td>{{ $employe->poste }}</td>
                        <td>{{ $employe->agence  }}</td>
                        <td><a href="{{route('employe.show',['id' => $employe->id ])}}" class="btn btn-info">Voir</a></td>
                        <td><a href="{{route('employe.edit',['id' => $employe->id ])}}" class=" btn btn-warning">Modifier</a></td>
                        <td><a href="{{route('employe.destroy',['id' => $employe->id ])}}" class=" btn btn-danger">Supprimer</a></td>
                </tr>
                    
                @endforeach
            </tbody>
           
        </table>
    </div>
@endsection