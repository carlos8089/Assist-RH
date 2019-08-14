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
                      margin-bottom: 8px;
                  }
        #boutonVld{
            float: right;
        }
    </style>
    <div class="main">
        <h3>Créer un nouvel employé</h3>
        <br>
        <form action="" method="post">
            <section>
                <h4>Identité</h4>
                <form class="form-horizontal" action="" method="">

                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2"><label for="nom" class="control-label ">Nom</label></div>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="iNom" id="nom">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2"><label for="prenom" class="control-label ">Prénoms</label></div>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="iPrenom" id="prenom">
                                </div> 
                            </div> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <label for="sexe" class="control-label ">Sexe</label>
                        </div>   
                                    
                        <div class="col-10">
                            <label for="sexeM" class="control-label">Masculin</label><input type="radio" name="iSexe" id="sexeM" value="M">
                            <label for="sexeF" class="control-label">Féminin</label><input type="radio" name="iSexe" id="sexeF" value="F" checked>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-1"> <label for="nais">Né(e) le</label> </div>
                        
                        <div class="col-5">
                            <input class="form-control" type="date" name="idateNais" id="nais" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1">
                            <label for="lieuNais" class="control-label ">À</label>
                        </div>
                        <div class="col-5">
                            <input  class="form-control" type="text" name="ilieuNais" id="lieuNais">
                        </div>
                    </div>     
                </form>
                
            </section>
            <br>
            <section>
                <h4>Situation sociale</h4>
                <form class="form-horizontal">
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
                    <div class="row">
                        <div class="col-3"><label for="nbEnfant">Nombres d'enfants</label></div>
                        <div class="col-8">
                            <input class="form-control" type="text" name="inbEnfant" id="nbEnfant">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3"><label for="addr">Adresse</label></div>
                        <div class="col-8">
                            <input class="form-control" type="text" name="iaddr" id="addr">
                        </div>
                    </div>
                </form>
            </section>
            <br>
            <section>
                <h4>Emploi</h4>
                <form class="form-horizontal">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2"><label for="">Poste</label></div>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="iposte" id="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-4"><label for="">Type de contrat</label></div>
                                <div class="col-7">
                                    <select class="form-control">
            
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1"> <label for="">Agence</label> </div>
                        <div class="col-6">
                            <input class="form-control" type="text" name="" id="">
                        </div>
                                
                    </div>
                    <div class="row">
                        <div class="col-2"> <label for="">Date d'embauche</label> </div>
                        <div class="col-6">
                            <input class="form-control" type="date" name="" id="">
                        </div>
                                
                    </div>
                </form>
            </section>

            <input type="submit" class="btn btn-success" value="Valider" id="boutonVld">
        </form>
    </div>
@endsection
@section('element2')
    
    <div class="card">
        <div>
            <img src="../../images/IMG-20190701-WA0021.jpg" alt="image test">
        </div>
        <div>
            <strong> Mr JOHNSON</strong>
        </div>
    </div>

@endsection