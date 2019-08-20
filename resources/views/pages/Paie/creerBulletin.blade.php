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
    <form action="{{route('bulletin.store','<?php ?>')}}" method="put" class="form">
            <section>
                    <div class="row">
                            <div class="col-4">
                                <div class="row">
                                        <div class="col-3"><label for="nom">Nom</label></div>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="" id="nom">
                                        </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-2"><label for="">Prénoms</label></div>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <div class="row">
                                    <div class="col-3"><label for="">Mois</label></div>
                                    <div class="col-5"><input class="form-control" type="month" name="" id=""></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2">Période</div>
                                    <div class="col-10">
                                        <div class="row">
                                            <div class="col-5">
                                                    <input class="form-control" type="number" name="" id="">
                                                    
                                            </div>
                                            <label for="">  au  </label>
                                            <div class="col-5">
                                                    
                                                    <input class="form-control" type="number" name="" id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
                
            
            <section>
                <div class="row">
                    <div class="col-6">
                            <div class="row">
                                    <div class="col-6">
                                        <label for="">Salaire de base</label>  
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="" id="">
                                    </div>
                                </div>
                
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Prime d'ancienneté</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="" id="">
                                    </div>
                                </div>
                                        
                                        
                            
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Prime de caisse</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="" id="">
                                    </div>
                                </div>
                                        
                            
                            
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Prime de responsabilité</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="" id="">
                                    </div>
                                </div>
                                        
                                        
                            
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Indemnité de logement</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="" id="">
                                    </div>
                                </div>
                                        
                                        
                            
                                <div class="row">
                                            <div class="col-6">
                                                <label for="">Indemnité de représentation</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="" id="">
                                            </div>
                                </div>
                                        
                                        
                            
                                <div class="row">
                                            <div class="col-6">
                                                <label for="">Prime d'habillement</label>  
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="" id="">
                                            </div>
                                </div>
                    </div>
                    <div class="col-6">
                            <div class="row">
                                    <div class="col-6">
                                        <label for="">Prime de déplacement</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="" id="">
                                    </div>
                        </div>
                                
                                
                    
                        <div class="row">
                                    <div class="col-6">
                                        <label for="">Prime d'encouragement</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="" id="">
                                    </div>
                                
                                
                        </div>
                                
                                
                    
                        <div class="row">
                                    <div class="col-6">
                                        <label for="">Prime de santé</label> 
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="" id="">
                                    </div>
                        </div>
                                
                                
                    
                        <div class="row">
                                    <div class="col-6">
                                        <label for="">Prime de terrain</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="" id="">
                                    </div>
                        </div>
                                
                                
                    
                        <div class="row">
                                    <div class="col-6">
                                        <label for="">Prime de jours fériés</label> 
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="" id="">
                                    </div>
                        </div>
                                
                                
                    
                        <div class="row">
                                    <div class="col-6">
                                        <label for="">Prime semestrielle</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="" id="">
                                    </div>
                        </div>
        
                        <div class="row">
                                    <div class="col-6">
                                        <label for="">Prime sur ouverture de compte</label>    
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" class="form-control" type="number" name="" id="">
                                    </div>
                        </div>
                    </div>
                </div>
            </section>
 
            <section>
                <div class="row">
                    <div class="col-6">
                        <label for="">CNSS</label>
                    </div>
                    <div class="col-6">
                        <input class="form-control" type="text" name="" id="">
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-6">
                        <label for="">IRPP</label>
                    </div>
                    <div class="col-6">
                        <input class="form-control" type="text" name="" id="">
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-6">
                        <label for="">TCS</label>
                    </div>
                    <div class="col-6">
                        <input class="form-control" type="text" name="" id="">
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-6">
                        <label for="">COTISATION MUTUELLE</label>
                    </div>
                    <div class="col-6">
                        <input class="form-control" type="text" name="" id="">
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-6">
                        <label for="">PRET IMMOBILIER COOPEC</label>
                    </div>
                    <div class="col-6">
                        <input class="form-control" type="text" name="" id="">
                    </div>
                </div>
            

            
                <div class="row">
                    <div class="col-6">
                        <label for="">TS</label>
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-control" name="" id="">
                    </div>
                </div>
            </section>
            
            <section>
                <div class="row">
                    <div class="col-3">
                        <label for="">Type de paiement</label>     
                    </div>
                    <div class="col-3">
                        <select class="form-control" name="" id="">
                            <option value="Espèce">Espèce</option>
                            <option value="">Virement</option>
                        </select>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-3"><label for="">Banque</label></div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="" id="">
                        </div>
                    </div>
            </section>
                
            <input type="submit" class="btn btn-success" value="Valider" id="boutonVld">
            
        </form>

        
    </div>
@endsection

