@@ -24,51 +24,57 @@
    </style>
    <div class="main">
        <h3>Créer un nouveau bulletin de paie</h3>
    <form action="{{route('bulletin.store')}}" method="POST" class="form-horizontal">
    <form action="" method="POST" class="form-horizontal">
        
        @csrf

            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-3"><label for="nom">Nom</label></div>
                            <div class="col-9">
                                <input class="form-control" type="text" name="nomEmploye" id="nomEmploye">
        <div class=" card">
            <div class=" card-header">
                <h4> Données d'en-tête</h4>
            </div>
            <div class=" card-body">
                <div class="form-group">
                   <!-- <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-3"><label for="nom">Nom</label></div>
                                <div class="col-9">
                                    <input class="form-control" type="text" name="nomEmploye" id="nomEmploye">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-2"><label for="">Prénoms</label></div>
                            <div class="col-10">
                                <input class="form-control" type="text" name="prenomEmploye" id="prenomEmploye">
                        <div class="col-8">
                            <div class="row">
                                <div class="col-2"><label for="">Prénoms</label></div>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="prenomEmploye" id="prenomEmploye">
                                </div>
                            </div>
                        </div>
                    </div>
                -->
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-5">
                        <div class="row">
                            <div class="col-3"><label for="">Mois</label></div>
                            <div class="col-5"><input class="form-control" type="month" name="mois" id="mois"></div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-3"><label for="">Mois</label></div>
                                <div class="col-9"><input class="form-control" type="month" name="mois" id="mois"></div>
                            </div>
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
                        <div class="col-8">
                            <div class="row">
                                <div class="col-3">Période</div>
                                <div class="col-19">
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
@ -76,164 +82,197 @@
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
                        
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="">Prime d'ancienneté</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="primeAnciennete" id="primeAnciennete">
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
                                                <label for="">Prime de caisse</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="primeCaisse" id="primeCaisse">
                                            </div>
                                        </div>
                                                    <div class="col-6">
                                                        <label for="">Prime d'encouragement</label>
                                                    </div>
                                                    <div class="col-6">
                                                        <input class="form-control" type="number" name="primeEncouragement" id="primeEncouragement">
                                                    </div>
                                                
                                    
                                    
                                                
                                        </div>
                                                                                   
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="">Prime de responsabilité</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="primeResponsabilite" id="primeResponsabilite">
                                            </div>
                                                    <div class="col-6">
                                                        <label for="">Prime de santé</label> 
                                                    </div>
                                                    <div class="col-6">
                                                        <input class="form-control" type="number" name="primeSante" id="primeSante">
                                                    </div>
                                        </div>
                                                
                                                
                                    
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="">Indemnité de logement</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="indemniteLogement" id="indemniteLogement">
                                            </div>
                                                    <div class="col-6">
                                                        <label for="">Prime de terrain</label>
                                                    </div>
                                                    <div class="col-6">
                                                        <input class="form-control" type="number" name="primeterrain" id="primeterrain">
                                                    </div>
                                        </div>
                                                
                                                
                                    
                                                  
                                        <div class="row">
                                                    <div class="col-6">
                                                        <label for="">Indemnité de représentation</label>
                                                        <label for="">Prime de jours fériés</label> 
                                                    </div>
                                                    <div class="col-6">
                                                        <input class="form-control" type="number" name="indemniteResponsabilite" id="indemniteResponsabilite">
                                                        <input class="form-control" type="number" name="primeJourFerie" id="primeJourFerie">
                                                    </div>
                                        </div>
                                                
                                                
                                    
                                        <div class="row">
                                                    <div class="col-6">
                                                        <label for="">Prime d'habillement</label>  
                                                        <label for="">Prime semestrielle</label>
                                                    </div>
                                                    <div class="col-6">
                                                        <input class="form-control" type="number" name="primeHabillement" id="primeHabillement">
                                                        <input class="form-control" type="number" name="primeSemestrielle" id="primeSemestrielle">
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
                        </div>
            </div>
                </div>
             
                
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
                                    <td>{{ $employe->id }}</td>
                                    <td>{{ $employe->nom  }}</td>
                                    <td>{{ $employe->prenoms }}</td>
                                    <td>{{ $employe->poste }}</td>
                                    <td>{{ $employe->agence  }}</td>
            
                                <td><a  class=" btn btn-primary" href=" {{ route( 'bulletin.store' , ['id',$employe->id] ) }}">Créer</a></td>
                                    <td><a href="{{ URL::to('/bulletin/pdf') }}" class="btn btn-info">Aperçu</a></td>                                  
                                    <td><a href="" class=" btn btn-danger">Imprimer</a></td>
                                
                                </tr>
                            @endforeach
                        </tbody>
                       
                    </table>
            </div>  
        </div>      
            
            
  <!--             
            
            <div class="form-group">
                    <div class="row">
@ -316,10 +355,8 @@
                    </div>
            </div>
            
            <div class="row float-right">
                <button type="submit" class="btn btn-success" id="boutonVld">Valider</button>
            </div>
            
        -->
        
            
        </form>
