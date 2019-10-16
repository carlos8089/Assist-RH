@php
    session_start();

    $_SESSION['mois']=$_GET['mois'];
    $_SESSION['debut']=$_GET['du'];
    $_SESSION['fin']=$_GET['au'];
@endphp

@extends('templates.base')
@section('element1')
<div class="card">
    <div class=" card-header">
       <h4>Liste des employés</h4>
    </div>
    <div class=" card-body">
        
              
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
                                <td>{{ $employe->id  }}</td>
                            <td>{{ $employe->nom  }}</td>
                            <td>{{ $employe->prenoms }}</td>
                            <td>{{ $employe->poste }}</td>
                            <td>{{ $employe->agence  }}</td>
                            
                            <td> <a class="btn btn-primary" href="{{ url("/fiche/creer/3/{$employe->id}") }}">Créer</a>                 </td>
                        
                        
                        </tr>
                    @endforeach
               
                </tbody>
               
            </table>
    </div>  
</div>

@endsection