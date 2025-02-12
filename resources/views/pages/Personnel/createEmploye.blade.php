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

        <div class="card">
            <div class="card-header">
                <h3>Créer un nouvel employé</h3>
            </div>
            <div class="card-body">
                <form action="{{route('employe.store')}}" method="POST" class="form-horizontal">

                @csrf

                    <h4>Identité</h4>
                
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2"><label for="nom" class="control-label ">Nom</label></div>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="nom" id="nom" value="carlos">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2"><label for="prenom" class="control-label ">Prénoms</label></div>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="prenoms" id="prenoms">
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label for="sexe" class="control-label ">Sexe</label>
                            </div>   
                                        
                            <div class="col-10">
                                <label for="sexe" class="control-label">Masculin</label><input type="radio" name="sexe" id="sexeM" value="M">
                                <label for="sexe" class="control-label">Féminin</label><input type="radio" name="sexe" id="sexeF" value="F" checked>
                            </div>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <div class="row">
                            <div class="col-1"> <label for="nais">Né(e) le</label> </div>
                                    
                            <div class="col-5">
                                <input class="form-control" type="date" name="dateNais" id="dateNais" >
                            </div>
                        </div>
                    </div>    
                        
                    <div class="form-group">
                            <div class="row">
                                    <div class="col-1">
                                        <label for="lieuNais" class="control-label ">À</label>
                                    </div>
                                    <div class="col-5">
                                        <input  class="form-control" type="text" name="lieuNais" id="lieuNais">
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
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="">Numero matricule</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" name="numMat" id="numMat" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                <div class="col-4">
                                        <label for="">Categorie</label>
                                    </div>
                                    <div class="col-8">
                                        <select type="text" name="categorie" id="categorie" class="form-control">
                                            @foreach($categories as $categorie)
                                                <option value="{{$categorie->id}}">{{$categorie->nomCategorie}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                    </div>
                    <div class="form-group">
                        <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-2"><label for="">Poste</label></div>
                                            <div class="col-8">
                                                <select name="poste" id="poste" class="form-control">
                                                    @foreach($postes as $poste)
                                                        <option value="{{$poste->id}}">{{$poste->libellePoste}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4"><label for="">Type de contrat</label></div>
                                            <div class="col-7">
                                                <select class="form-control" name="contrat" id="contrat">
                                                    @foreach($contrats as $contrat)
                                                        <option value="{{$contrat->id}}">{{$contrat->libelleContrat}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <div class="row">
                            <div class="col-1"> <label for="">Agence</label> </div>
                            <div class="col-6">
                                <select name="agence" id="agence" class="form-control">
                                    @foreach($agences as $agence)
                                        <option value="{{$agence->id}}">{{$agence->nomAgence}}</option>
                                    @endforeach
                                </select>
                            </div>
                                            
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2"> <label for="">Date d'embauche</label> </div>
                            <div class="col-6">
                                <input class="form-control" type="date" name="dateEmbauche" id="dateEmbauche">
                            </div>
                                            
                        </div>
                    </div>
                    
            </div>
            <div class="card-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-success"  id="boutonVld">Valider</button>
                </div>
            </div>
                </form>
                        
        </div>
        
    </div>

    <script>
    $(function(){
        //selection de la catégorie
        $('#categorie').val(id).prop('selected',true);

        //synchronistaion des postes
        posteUpdate(categorie_id);

        //changement de categorie
        $('#categorie').on('change',function(e){
            var categorie_id = e.target.value;
            poste_id = false;
            posteUpdate(categorie_id);
        })

        //requête ajax pour les villes
        function posteUpdate(categorieId){
            $.get('{{ url('postes') }}/'+categorieId+"'", function(data){
                $('#poste').empty();
                $.each(data, function(index, postes){
                    $('#poste').append($('<option>',{
                        value: postes.id,
                        text: postes.libellePoste
                    }));
                });
                if(poste_id){
                    $('#poste').val(poste_id).prop('selected',true);
                }
            });
        }
    });
    </script>
@endsection
@section('element2')
    
    <div class="card">
        <div>
            <img src="../../images/IMG-20190701-WA0021.jpg" alt="image test">
        </div>
        <div>
            <img src="" alt="charger" srcset="">
        </div>
    </div>

@endsection