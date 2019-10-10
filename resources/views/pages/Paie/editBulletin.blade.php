@extends('templates.base')

@section('element1')
    <style>
        .container{
            margin-bottom: 23px;
        }
    </style>
        <div class="container">
            @foreach ($bulletins as $bulletin)
                <form action="{{route('bulletin.update',[ $bulletin->id ])}}" method="PUT" onsubmit="confirm('Confirmez la modification ?')">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <div class="col-3"><label for="">Mois</label></div>
                                <div class="col-9">
                                    <input class="form-control" type="month" name="mois" id="mois" value="{{ $bulletin->mois }}" disabled>
                                </div>
                            </div>
                            <div class="col-6">
                                    <div class="col-3">Période</div>
                                    <div class="col-19">
                                        <div class="row">
                                            <div class="col-5">
                                                <input class="form-control" type="number" name="du" id="du" value="{{ $bulletin->du }}" disabled>      
                                            </div>
                                            <label for="">  au  </label>
                                            <div class="col-5">          
                                                <input class="form-control" type="number" name="au" id="au" value="{{ $bulletin->au}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Salaire de base</label>  
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="salaireDeBase" id="salaireDeBase">
                                    </div>
                                </div>
                            
                                <div class="row">
                                            <div class="col-6">
                                                <label for="">Prime d'ancienneté</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="primeAnciennete" id="primeAnciennete">
                                            </div>
                                </div>
                                                    
                                <div class="row">
                                            <div class="col-6">
                                                <label for="">Prime de caisse</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="primeCaisse" id="primeCaisse">
                                            </div>
                                </div>
                                                    
                                <div class="row">
                                            <div class="col-6">
                                                <label for="">Prime de responsabilité</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="primeResponsabilite" id="primeResponsabilite">
                                            </div>
                                </div>
                                                    
                                <div class="row">
                                            <div class="col-6">
                                                <label for="">Indemnité de logement</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="indemniteLogement" id="indemniteLogement">
                                            </div>
                                </div>
                                                    
                                <div class="row">
                                            <div class="col-6">
                                                <label for="">Indemnité de représentation</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="indemniteResponsabilite" id="indemniteResponsabilite">
                                            </div>
                                </div>
                                                    
                                <div class="row">
                                            <div class="col-6">
                                                <label for="">Prime d'habillement</label>  
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="primeHabillement" id="primeHabillement">
                                            </div>
                                </div>
                            </div>
                    
                                    
                            <div class="col-6">
                                <div class="row">
                                        <div class="col-6">
                                            <label for="">Prime de déplacement</label>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" type="number" name="primeDeplacement" id="primeDeplacement">
                                        </div>
                                </div>
                                                     
                                <div class="row">
                                        <div class="col-6">
                                            <label for="">Prime d'encouragement</label>
                                        </div>
                                        <div class="col-6">
                                                <input class="form-control" type="number" name="primeEncouragement" id="primeEncouragement">
                                            </div>
                                </div>
                                                                            
                                <div class="row">
                                        <div class="col-6">
                                            <label for="">Prime de santé</label> 
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" type="number" name="primeSante" id="primeSante">
                                        </div>
                                </div>
                                
                                <div class="row">
                                        <div class="col-6">
                                            <label for="">Prime de terrain</label>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" type="number" name="primeterrain" id="primeterrain">
                                        </div>
                                </div>
                                                 
                                <div class="row">
                                        <div class="col-6">
                                            <label for="">Prime de jours fériés</label> 
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" type="number" name="primeJourFerie" id="primeJourFerie">
                                        </div>
                                </div>
                                    
                                <div class="row">
                                        <div class="col-6">
                                            <label for="">Prime semestrielle</label>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" type="number" name="primeSemestrielle" id="primeSemestrielle">
                                        </div>
                                </div>

                                <div class="row">
                                        <div class="col-6">
                                            <label for="">Prime sur ouverture de compte</label>    
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" class="form-control" type="number" name="primeOuvertureCompte" id="primeOuvertureCompte">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <button type="submit" class="btn btn-success">Valider</button>
                    </div>
                </form>
            @endforeach
        </div>
    
@endsection