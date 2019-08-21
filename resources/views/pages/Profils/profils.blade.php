@extends('templates.base')

@section('element1')

<style>
</style>

<div class="container">
<div class="col">
    <div class="">
        <a href="{{route('User.create')}}" class="btn btn-success"><p>Créer un nouveau profil</p></a>
    </div>
    <div class="">
        <a href="" class="btn btn-warning"><p>Modifier un profil existant</p></a>
    </div>
    <div class="">
        <a href="" class="btn btn-danger"><p>Supprimer un profil existant</p></a>
    </div>
    <div class="">
    <a href="{{route('User.index')}}" class="btn btn-primary">Voir la liste des profils</a>
    </div>

</div>

</div>
@endsection
