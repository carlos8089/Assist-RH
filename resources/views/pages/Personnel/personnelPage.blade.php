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
            <form action="{{ URL::to('personnel/find/{nomEmploye}') }}" method="GET">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <input class="form-control" type="text" placeholder="nom / numero matricule" id="nomEmploye" name="nomEmploye">
                        </div>
                        <div class="col-">
                            <button  type="submit" class="btn btn-info">Rechercher</button>
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
                        <td>{{ $employe->prenoms }}</td>
                        <td>{{ $employe->poste }}</td>
                        <td>{{ $employe->agence  }}</td>
                        
                        <td>
                            <form class="row" action=" {{ route('employe.destroy',[$employe->id])}} " onsubmit="return confirm('Voulez-vous vraiment supprimer ?')">
                                <a href="{{route('employe.show', ['id' => $employe->id ])}}" class="btn btn-info">Voir</a>
                                <a href="{{route('employe.edit', ['id' => $employe->id ])}}" class=" btn btn-warning">Modifier</a>
                                <button class="btn btn-danger" type="submit"><i class="nav-icon fa fa-trash-o"></i>Supprimer</button>
                            </form>
                        </td>
                    
                        
                        
                    </tr>
                @endforeach
            </tbody>
           
        </table>
        {{ $employes->links() }}
    </div>
@endsection