@extends('templates.base')
@section('element1')
    <style>
        .main{
        padding: 20px;
        background-color: #ffffff;
        overflow: auto;
        }
        label{
            display: inline-block;
        }
        .row{
            margin-bottom: 5px;
        }
        .form{
            margin-bottom: 30px;
        }
        #boutonVld{
            float: right;
            margin-right: 200px;
            width: 150px;
        }
        
    </style>
    <div class="main">
        <h3>Créer un nouveau bulletin de paie</h3>
    <form action="{{route('bulletin.store')}}" method="POST" class="form-horizontal">
        
        @csrf

            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-3"><label for="nom">Nom</label></div>
                            <div class="col-9">
                                <input class="form-control" type="text" name="nomEmploye" id="nomEmploye">
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-2"><label for="">Prénoms</label></div>
                            <div class="col-10">
                                <input class="form-control" type="text" name="prenomEmploye" id="prenomEmploye">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-5">
                        <div class="row">
                            <div class="col-3"><label for="">Mois</label></div>
                            <div class="col-5"><input class="form-control" type="month" name="mois" id="mois"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-2">Période</div>
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-5">
                                        <input class="form-control" type="number" name="du" id="du">
                                                    
                                    </div>
                                    <label for="">  au  </label>
                                    <div class="col-5">
                                                    
                                        <input class="form-control" type="number" name="au" id="au">
                                    </div>
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
                
            
            <div class="form-group">
                    <div class="row">
                            <div class="col-6">
                                <label for="">CNSS</label>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="CNSS" id="IRPP">
                            </div>
                        </div>
        
                        <div class="row"> 
                            <div class="col-6">
                                <label for="">IRPP</label>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="IRPP" id="IRPP">
                            </div>
                        </div>
        
                        <div class="row"> 
                            <div class="col-6">
                                <label for="">TCS</label>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="TCS" id="TCS">
                            </div>
                        </div>
        
                        <div class="row"> 
                            <div class="col-6">
                                <label for="">COTISATION MUTUELLE</label>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="cotisationMutuelle" id="cotisationMutuelle
                                ">
                            </div>
                        </div>
        
                        <div class="row"> 
                            <div class="col-6">
                                <label for="">PRET IMMOBILIER COOPEC</label>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="pretImmobilier" id="pretImmobilier">
                            </div>
                        </div>
                    
        
                    
                        <div class="row">
                            <div class="col-6">
                                <label for="">TS</label>
                            </div>
                            <div class="col-6">
                                <input type="number" class="form-control" name="TS" id="TS">
                            </div>
                        </div>
            </div>
            
               
            
            <div class="for-group">
                    <div class="row">
                            <div class="col-3">
                                <label for="">Type de paiement</label>     
                            </div>
                            <div class="col-3">
                                <select class="form-control" name="typePaiement" id="typePaiement">
                                    <option value="Espèce">Espèce</option>
                                    <option value="">Virement</option>
                                </select>
                            </div>
                    </div>
                    <div class="row">
                                <div class="col-3"><label for="">Banque</label></div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="banque" id="banque">
                                </div>
                    </div>
            </div>
            
            <div class="row float-right">
                <button type="submit" class="btn btn-success" id="boutonVld">Valider</button>
            </div>
            
            
        </form>

        
    </div>
@endsection

