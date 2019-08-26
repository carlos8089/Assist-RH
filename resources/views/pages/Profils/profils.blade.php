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
                    <a href="{{route('User.create')}}"  class="btn btn-primary" >Créer un utilsateur</a>
        </div>
        <div class="col-6">
        <form action="{{route('User.index')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-8">
                        <input class="form-control" type="text" placeholder="nom / numero matricule" id="rechercherInput" name="inpRechercher">
                    </div>
                    <div class="col-">
                        <input  type="submit" class="btn btn-info" value="Rechercher">
                    </div>     
                           
                </div>
                                            
            </form>
        </div>
        <div class="col-3">
                   <a href="{{route('User.index')}}" id="liste" class="btn btn-primary">Liste des utilisateurs</a> 
        </div> 
    </div>
</div>
    


<div class="container">
    <table class=" table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                
                <td>Nom</td>
                <td>E-mail</td>
                
                
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                   
                    <td>{{ $user->name  }}</td>
                    <td>{{ $user->email }}</td>
                    
                    
                    <td><a href="{{route('User.show',['id' => $user->id ])}}" class="btn btn-info">Voir</a></td>
                    <td><a href="{{route('User.edit',['id' => $user->id ])}}" class=" btn btn-warning">Modifier</a></td>
                    <td><a href="{{route('User.destroy',['id' => $user->id ])}}" class=" btn btn-danger">Supprimer</a></td>
                    
            </tr>
               
            @endforeach
        </tbody>
       
    </table>
</div>

@endsection
