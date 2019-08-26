@extends('templates.base')

@section('element1')
<div class="container">
   
        <p><h2>Liste des profils</h2></p>
    
        <div class="container">
            <table class="table table-striped table-hover">
                <thead class="thead thead-dark">
                    <tr>
                        <td>ID</td>
                        <td>Nom</td>
                        <td>E-mail</td>
                        <td>Mot de passe</td>
                        <td>Créé le</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->created_at }}</td>
                            
                            <td><a href="{{route('User.edit',['id' => $user->id ])}}" class=" btn btn-warning">Modifier</a></td>
                            <td><a href="{{route('User.destroy',['id' => $user->id ])}}" class=" btn btn-danger">Supprimer</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection



