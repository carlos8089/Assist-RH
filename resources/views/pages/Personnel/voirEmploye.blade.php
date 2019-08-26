@extends('templates.base')
@section('element1')
    <style>
        .main{
            padding: 20px;
            background-color: #ffffff;
            overflow: auto;
            
        }
        #create{
            margin-bottom: 10px;
        }
        #liste{
            margin-bottom: 10px;
            float: right;
        }
        section{
            border: 1px solid gray;
            margin: 10px;
            padding: 5px;
            
        }
        #rechercherInput{}
        #rechercherSubmit{}
    </style>
    <div class="main">
            
            <H2>Informations complètes de l'employé</H2>
            
            @foreach ($employes as $employe)
            <div>
                    <style> 
                        /* Style the tab */
                        .tab {
                        overflow: hidden;
                            border: 1px solid #ccc;
                            background-color: #f1f1f1;
                        }
                                
                        /* Style the buttons inside the tab */
                        .tab button {
                            background-color: inherit;
                            float: left;
                            border: none;
                            outline: none;
                            cursor: pointer;
                            padding: 14px 16px;
                            transition: 0.3s;
                            font-size: 17px;
                        }
                                
                        /* Change background color of buttons on hover */
                        .tab button:hover {
                             background-color: #ddd;
                        }
                                
                        /* Create an active/current tablink class */
                        .tab button.active {
                            background-color: #009933;
                            color: #f1f1f1;
                        }
                                
                        /* Style the tab content */
                        .tabcontent {
                            display: none;
                            padding: 6px 12px;
                            border: 1px solid #ccc;
                            border-top: none;
                        }
                    </style>
    
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'Civilite')" id="defaultOpen"><strong>Civilités</strong></button>
                        <button class="tablinks" onclick="openCity(event, 'Emploi')"><strong>Emploi</strong> </button>
                        <button class="tablinks" onclick="openCity(event, 'Donnee')"> <strong>Données bancaires</strong> </button>
                        <button class="tablinks" onclick="openCity(event, 'CV')"><strong>Curriculum Vitae</strong> </button>
                    </div>
                                
                    <div id="Civilite" class="tabcontent">
                        <section>
                            <style>
                                label{
                                    display: inline-block;             
                                }
                                .row{
                                              margin: 5px;
                                }
                        </style>
                            <h4>Identité</h4>
                            <form class="form-horizontal" action="" method="">
    
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-2"><label for="nom" class="control-label ">Nom</label></div>
                                            <div class="col-10">
                                                <input class="form-control" type="text" name="iNom" id="nom" value="{{ $employe->nom }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-2"><label for="prenom" class="control-label ">Prénoms</label></div>
                                            <div class="col-10">
                                                <input class="form-control" type="text" name="iPrenom" id="prenom" value="{{ $employe->prenoms }}" disabled>
                                            </div> 
                                        </div> 
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-2">
                                        <label for="sexe" class="control-label ">Sexe</label>
                                    </div>   
                                                            
                                    <div class="col-10">
                                        <label for="sexeM" class="control-label">Masculin</label><input type="radio" name="iSexe" id="sexeM" value="M" disabled>
                                        <label for="sexeF" class="control-label">Féminin</label><input type="radio" name="iSexe" id="sexeF" value="F" disabled checked>
                                    </div>
                                </div>
                                            
                                <div class="row">
                                    <div class="col-1"> <label for="nais">Né(e) le</label> </div>
                                                
                                    <div class="col-5">
                                        <input class="form-control" type="date" name="idateNais" id="nais" value="{{ $employe->dateNais }}" disabled>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-1">
                                        <label for="lieuNais" class="control-label ">À</label>
                                    </div>
                                     <div class="col-5">
                                        <input  class="form-control" type="text" name="ilieuNais" id="lieuNais" value="{{ $employe->lieuNais }}" disabled>
                                    </div>
                                </div>     
                            </form>
                                        
                                    </section>
                                    <section>
                                        <h4>Situation sociale</h4>
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <div class="col-3"><label for="sitMat">Situation matrimoniale</label></div>
                                                <div class="col-8">
                                                    <input class="form-control" type="text" name="isitMat" id="sitMat" value="{{ $employe->sitMat }}" disabled>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3"><label for="nbEnfant">Nombres d'enfants</label></div>
                                                <div class="col-8">
                                                    <input class="form-control" type="text" name="inbEnfant" id="nbEnfant" value="{{ $employe->nbEnfant }}" disabled>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3"><label for="addr">Adresse</label></div>
                                                <div class="col-8">
                                                    <input class="form-control" type="text" name="iaddr" id="addr" value="{{ $employe->addr }}" disabled>
                                                </div>
                                            </div>
                                        </form>
                                    </section>
                                </div>
                                
                                <div id="Emploi" class="tabcontent">
                                    
                                        <h4></h4>
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <div class="col-6">
                                                        <div class="row">
                                                                <div class="col-2"><label for="">Poste</label></div>
                                                                <div class="col-8">
                                                                    <input class="form-control" type="text" name="poste" id="poste" value="{{ $employe->poste }}" disabled >
                                                                </div>
                                                            </div>
                                                </div>
                                                <div class="col-6">
                                                        <div class="row">
                                                                <div class="col-4"><label for="">Type de contrat</label></div>
                                                                <div class="col-7">
                                                                    <input class="form-control" type="text" name="contrat" id="contrat" value="{{ $employe->contrat }}" disabled >
                                                                </div>
                                                            </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-2"> <label for="">Agence</label> </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="text" name="agence" id="agence" value="{{ $employe->agence }}" disabled >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-2"><label for="">Numero matricule</label></div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="text" name="numMat" id="numMat" value="{{ $employe->numMat }}" disabled >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-2"> <label for="">Date d'embauche</label> </div>
                                                    <div class="col-6">
                                                        <input class="form-control" type="date" name="dateEmbauche" id="dateEmbauche" value="{{ $employe->dateEmbauche }}" disabled>
                                                    </div>
                                            </div>
                                            
    
                                            
                                        </form>
                                        
                                </div>
                
                </div>    
        </div>                
        <script>
                                function openCity(evt, cityName) {
                                    var i, tabcontent, tablinks;
                                    tabcontent = document.getElementsByClassName("tabcontent");
                                    for (i = 0; i < tabcontent.length; i++) {
                                        tabcontent[i].style.display = "none";
                                    }
                                    tablinks = document.getElementsByClassName("tablinks");
                                    for (i = 0; i < tablinks.length; i++) {
                                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                                    }
                                    document.getElementById(cityName).style.display = "block";
                                    evt.currentTarget.className += " active";
                                }
                                
                                // Get the element with id="defaultOpen" and click on it
                                document.getElementById("defaultOpen").click();
        </script>
            @endforeach

            
           
@endsection