@extends('templates.base')
@section('element1')
    <div class="container">
        @foreach ($employes as $employe)
            {!! Form::open(['route'=>['update',$employe->id],'method'=>'PUT']) !!}
            {!! Form::text('nom', $employe->nom) !!} <br>
            {!! Form::text('prenom', $employe->prenoms) !!}
            {!! Form::radio('sexe', ['M','F'], $employe->sexe) !!}
            {!! Form::date('dateNais', $employe->dateNais) !!}
            {!! Form::text('lieuNais', $employe->lieuNais) !!}
            {!! Form::select('sitMat',['Celibataire','Marié(e)','Divorcé(e)','Veuf(ve)'], $employe->sitMat) !!}
            {!! Form::number('nbEnfant', $employe->nbEnfant) !!}
            {!! Form::text('addr', $employe->addr) !!}
            {!! Form::text('numMat', $employe->numMat) !!}
            {!! Form::select('poste', $list, $employe->poste) !!}
            {!! Form::select('contrat', $list, $employe->contrat) !!}
            {!! Form::select('agence', $list, $employe->agence) !!}
            {!! Form::date('dateEmbauche', $employe->created_at) !!}
            {!! Form::submit('Valider') !!}
            {!! Form::close() !!}
        @endforeach

    </div>
@endsection