@php
    session_start();

   /* $_SESSION['mois']=$_GET['mois'];
    $_SESSION['debut']=$_GET['du'];
    $_SESSION['fin']=$_GET['au'];
    */
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
        
            
        <form action="{{ route('bulletin.store') }}" method="POST" class="form-horizontal">
            
                @csrf
                    <input type="text" name="nature" id="nature" value="automatique" hidden>
                 <div class=" card">
                     <div class="card-header">
                         <h4> Nouveau bulletin automatique</h4>
                     </div>
                     
                     <div class=" card-body">
                        @foreach ($employes as $employe)
                        <div class="card" >
                                <div class="form-group">
                                        <div>
                                            <input type="hidden" name="employe_id" value="{{ $employe->id }}">
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="row">
                                                    <div class="col-3"><label for="nom">Nom</label></div>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" name="nomEmploye" id="nomEmploye" value="{{ $employe->nom }}">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-8">
                                                    <div class="row">
                                                        <div class="col-2"><label for="">Prénoms</label></div>
                                                        <div class="col-10">
                                                            <input class="form-control" type="text" name="prenomEmploye" id="prenomEmploye"  value="{{ $employe->prenoms }}">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="mois">Mois de</label>
                                            </div>
                                            <div class="col-6">
                                                <input type="month" name="mois" id="mois" class="form-control" value="{{ $_SESSION['mois'] }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-3">Période</div>
                                                <div class="col-9">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <input class="form-control" type="number" name="du" id="du" value="{{ $_SESSION['debut']}}">              
                                                        </div>
                                                            <label for="">  au  </label>
                                                        <div class="col-5">                                         
                                                            <input class="form-control" type="number" name="au" id="au" value="{{ $_SESSION['fin']}}">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                        </div>
                        @endforeach
 
                        @foreach ($categories as $categorie)
                            <div class="card">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                         <div class="row">
                                             <div class="col-6">
                                                 <label for="">Salaire de base</label>  
                                             </div>
                                             <div class="col-6">
                                                     <input class="form-control" type="number" name="salaireDeBase" id="salaireDeBase" value="{{ $categorie->categorie_salaireDeBase }}">       
                                             </div>
                                         </div>
                                             
                                         <div class="row">
                                             <div class="col-6">
                                                 <label for="">Prime d'ancienneté</label>
                                             </div>
                                             <div class="col-6">
                                                 
                                                    <input class="form-control" type="number" name="primeAnciennete" id="primeAnciennete" value="{{ $categorie->categorie_primeAnciennete }}">
                                                 
                                                 
                                             </div>
                                         </div>
                                                                                       
                                         <div class="row">
                                             <div class="col-6">
                                                 <label for="">Prime de caisse</label>
                                             </div>
                                             <div class="col-6">   
                                                <input class="form-control" type="number" name="primeCaisse" id="primeCaisse" value="{{ $categorie->categorie_primeCaisse }}">           
                                             </div>
                                         </div>
                                                                                
                                         <div class="row">
                                             <div class="col-6">
                                                 <label for="">Prime de responsabilité</label>
                                             </div>
                                             <div class="col-6">
                                                 <input class="form-control" type="number" name="primeResponsabilite" id="primeResponsabilite" value="{{ $categorie->categorie_primeResponsabilite }}">
                                             </div>
                                         </div>                          
                                                         
                                         <div class="row">
                                             <div class="col-6">
                                                 <label for="">Indemnité de logement</label>
                                             </div>
                                             <div class="col-6">
                                                 <input class="form-control" type="number" name="indemniteLogement" id="indemniteLogement" value="{{ $categorie->categorie_indemniteLogement }}">
                                             </div>
                                         </div>
                                                                     
                                         <div class="row">
                                             <div class="col-6">
                                                 <label for="">Indemnité de représentation</label>
                                             </div>
                                             <div class="col-6">
                                                 <input class="form-control" type="number" name="indemniteResponsabilite" id="indemniteResponsabilite" value="{{ $categorie->categorie_indemniteRepresentation }}">
                                             </div>
                                         </div>
             
                                         <div class="row">
                                             <div class="col-6">
                                               <label for="">Prime d'habillement</label>  
                                             </div>
                                             <div class="col-6">
                                                 <input class="form-control" type="number" name="primeHabillement" id="primeHabillement" value="{{ $categorie->categorie_primeHabillement }}">
                                             </div>
                                         </div>                    
                                        </div>
         
                                        <div class="col-6">
                                         <div class="row">
                                             <div class="col-6">
                                                 <label for="">Prime d'encouragement</label>
                                             </div>
                                             <div class="col-6">
                                                 <input class="form-control" type="number" name="primeEncouragement" id="primeEncouragement" value="{{ $categorie->categorie_primeEncouragement }}">
                                             </div>
                                         </div>                       
                       
                                         <div class="row">
                                             <div class="col-6">
                                                 <label for="">Prime de déplacement</label>
                                             </div>
                                             <div class="col-6">
                                                 <input class="form-control" type="number" name="primeDeplacement" id="primeDeplacement"  value="{{ $categorie->categorie_primeDeplacement }}">
                                             </div>
                                         </div>
                                                                                     
                                         <div class="row">
                                             <div class="col-6">
                                                 <label for="">Prime de santé</label> 
                                             </div>
                                             <div class="col-6">
                                             <input class="form-control" type="number" name="primeSante" id="primeSante" value="{{ $categorie->categorie_primeSante }}">
                                             </div>
                                         </div>
                                                                              
                                         <div class="row">
                                                         <div class="col-6">
                                                             <label for="">Prime de terrain</label>
                                                         </div>
                                                         <div class="col-6">
                                                             <input class="form-control" type="number" name="primeterrain" id="primeterrain" value="{{ $categorie->categorie_primeTerrain }}">
                                                         </div>
                                         </div>
                                                                  
                                         <div class="row">
                                                         <div class="col-6">
                                                             <label for="">Prime de jours fériés</label> 
                                                         </div>
                                                         <div class="col-6">
                                                             <input class="form-control" type="number" name="primeJourFerie" id="primeJourFerie"  value="{{ $categorie->categorie_primeJourFerie }}">
                                                         </div>
                                         </div>                  
                                         
                                         <div class="row">
                                                         <div class="col-6">
                                                             <label for="">Prime semestrielle</label>
                                                         </div>
                                                         <div class="col-6">
                                                             <input class="form-control" type="number" name="primeSemestrielle" id="primeSemestrielle"  value="{{ $categorie->categorie_primeSemestrielle }}">
                                                         </div>
                                         </div>
                             
                                         <div class="row">
                                             <div class="col-6">
                                                 <label for="">Prime sur ouverture de compte</label>    
                                             </div>
                                             <div class="col-6">
                                                 <input class="form-control" class="form-control" type="number" name="primeOuvertureCompte" id="primeOuvertureCompte"  value="{{ $categorie->categorie_primeOuvertureCompte }}">
                                             </div>
                                         </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        @endforeach
                        
                         
                     </div>
                     
                     <div class="card-footer">
                             <input type="submit" value="Valider" class="btn btn-success">
                     </div>
                 </div>
                 
                 
     
         </form>
        
    
    
    @endsection
   