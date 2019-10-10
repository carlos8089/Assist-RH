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
    <form action="" method="POST" class="form-horizontal">
        
        @csrf
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
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-3"><label for="">Mois</label></div>
                                <div class="col-9"><input class="form-control" type="month" name="mois" id="mois"></div>
                            </div>
                        </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            
        <div class="card">
            <div class=" card-header">
               <h4>Liste des employés</h4>
            </div>
            <div class=" card-body">
                
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
                                    
                                    <td>
                                        <form action="{{ route('bulletin.create' , ['id',$employe->id]) }}" method="GET">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Créer</button>
                                            <a href="{{ URL::to('/bulletin/pdf') }}" class="btn btn-info">Aperçu</a>
                                            <a href="" class=" btn btn-danger">Imprimer</a>
                                        </form>
                                    </td>
                                
                                
                                </tr>
                            @endforeach
                        </tbody>
                       
                    </table>
            </div>  
        </div>      
            
            
  <!--             
            
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
            
        -->
        
            
        </form>

        
    </div>
@endsection

