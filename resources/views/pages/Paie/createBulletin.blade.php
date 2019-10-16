@php
    session_start();

    $_SESSION['mois']=$_GET['mois'];
    $_SESSION['debut']=$_GET['du'];
    $_SESSION['fin']=$_GET['au'];
@endphp

    @extends('templates.base')

    @section('element1')
        <style>
            form .row{
                margin-bottom: 10px;
            }
            .card{
                padding: 18px;
                margin-bottom: 10px;
            }
        </style>
        <form action="{{ route('bulletin.store') }}" method="POST" class="form-horizontal" >
            @csrf
            <div class=" card">
                <div class="card-header">
                    <h4> Nouveau bulletin manuel</h4>
                </div>

                <div class=" card-body">
                   <div class="card" >
                        
                                <div class="row">
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-3"><label for="nom">Nom</label></div>
                                            <div class="col-9">
                                                <input class="form-control" type="text" name="nom" id="nom" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-8">
                                            <div class="row">
                                                <div class="col-2"><label for="">Prénoms</label></div>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" name="prenoms" id="prenoms">
                                                </div>
                                            </div>
                                    </div>
                                </div>  
                                <div class="row" >
                                    <div class="col-2">
                                        <label for="mois">Mois de</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="month" name="mois" id="mois" class="form-control" value="{{ $_SESSION['mois'] }}" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-2">Période</div>
                                        <div class="col-9">
                                            <div class="row">
                                                <div class="col-5">
                                                    <input class="form-control" type="number" name="du" id="du" value="{{ $_SESSION['debut']}}" disabled>              
                                                </div>
                                                    <label for="">  au  </label>
                                                <div class="col-5">                                         
                                                    <input class="form-control" type="number" name="au" id="au" value="{{ $_SESSION['fin']}}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        
                   </div>

                   <div class="card">
                        
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="">Salaire de base</label>  
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="salaireDeBase" id="salaireDeBase" value="">
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
                                                <input class="form-control" type="number" name="primeResponsabilite" id="primeResponsabilite" value="">
                                            </div>
                                        </div>                          
                                                        
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="">Indemnité de logement</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="indemniteLogement" id="indemniteLogement" value="">
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
                                                <label for="">Prime d'encouragement</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="primeEncouragement" id="primeEncouragement">
                                            </div>
                                        </div>                       
                      
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
                    
                   <div class="card">
                        <div class="row">
                            <div class="col-">
                                <label for="CNSS">CNSS</label>
                            </div>
                            <div class="col-">
                                <input type="number" name="CNSS" id="CNSS" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-">
                                <label for="IRPP">IRPP</label>
                            </div>
                            <div class="col-">
                                <input type="number" name="IRPP" id="IRPP" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-">
                                <label for="TCS">TCS</label>
                            </div>
                            <div class="col-">
                                <input type="number" name="TCS" id="TCS" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-">
                                <label for="cotisationMutuelle">Cotisation Mutuelle</label>
                            </div>
                            <div class="col-">
                                <input type="number" name="cotisationMutuelle" id="cotisationMutuelle" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-">
                                <label for="pretImmobilier">Prêt immobilier COOPECFI</label>
                            </div>
                            <div class="col-">
                                <input type="number" name="pretImmobilier" id="pretImmobilier" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-">
                                <label for="typePaiement">Type de paiement</label>
                            </div>
                            <div class="col-">
                                <select name="typePaiement" id="typePaiement" class="form-control">
                                    <option value="Comptant">Au comptant (espèce)</option>
                                    <option value="Virement bancaire">Virement bancaire</option>
                                    <option value="Chèque">Chèque</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-">
                                <label for="banque">Banque</label>
                            </div>
                            <div class="col-">
                                <input type="text" name="banque" id="banque" class="form-control">
                            </div>
                        </div>
                   </div>
                </div>

                <div class="card-footer">
                        <input type="submit" value="Valider" class="btn btn-success" class="form-control">
                </div>
            </div>

        </form>
    @endsection
   