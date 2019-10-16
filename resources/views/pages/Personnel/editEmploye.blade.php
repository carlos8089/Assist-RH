@extends('templates.base')
@section('element1')
    <div class="container">
        @foreach ($employes as $employe)

            <form action="{{route('employe.update', $employe->id )}}" method="PUT">

                    @csrf
                    <h4>Identité</h4>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-2"><label for="nom" class="control-label ">Nom</label></div>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="nom" id="nom" value="{{ $employe->nom }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-2"><label for="prenom" class="control-label ">Prénoms</label></div>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="prenom" id="prenom">
                                        </div> 
                                    </div> 
                                </div>
                            </div>
                        </div>
    
                        <h4>Situation sociale</h4>
    
                        <div class="form-group">
                            <div class="row">
                                <div class="col-3"><label for="sitMat">Situation matrimoniale</label></div>
                                <div class="col-8">
                                    <select class="form-control" type="text" name="isitMat" id="sitMat">
                                        <option value="Celibataire">Celibataire</option>
                                        <option value="Marié(e)">Marié(e)</option>
                                        <option value="Divorcé(e)">Divorcé(e)</option>
                                        <option value="Veuf(ve)">Veuf(ve)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="row">
                                <div class="col-3"><label for="nbEnfant">Nombres d'enfants</label></div>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="nbEnfant" id="nbEnfant">
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="row">
                                <div class="col-3"><label for="addr">Adresse</label></div>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="iaddr" id="addr">
                                </div>
                            </div>
                        </div>
    
                        <h4>Emploi</h4>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-3">
                                    <label for="">Poste</label>
                                </div>
                                <div class="col-2">
                                    <select class="form-control" name="poste" id="poste">
                                        @foreach ($postes as $poste)
                                            <option value="{{$poste->id}}">{{$poste->libellePoste}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                            
                        <div class="form-group">
                            <div class="row">
                                <div class="col-1"> <label for="">Agence</label> </div>
                                <div class="col-6">
                                    <select name="agence" id="agence" class="form-control">
                                        @foreach ($agences as $agence)
                                            <option value="{{$agence->id}}">{{$agence->nomAgence}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                                
                            </div>
                        </div>
                       
                    <div class="form-group">
                        <button type="submit" class="btn btn-success"  id="boutonVld">Valider</button>
                    </div>
        
                    
                </form>
            </div>
        
        </div>
            </form>
        @endforeach

    </div>
@endsection