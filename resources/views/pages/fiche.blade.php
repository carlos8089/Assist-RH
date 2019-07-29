@extends('templates.base')
@section('cont')
    @extends('templates.main')
    @section('titre')
        Gestion organiser de la paie
    @endsection
    @section('contenu')
        @extends('templates.paie')
    @endsection

    @extends('templates.action')
@endsection