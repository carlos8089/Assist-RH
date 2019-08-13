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
    </style>
    <div class="main">
        <h3>Créer un nouveau bulletin de paie</h3>
        <form action="" method="post" class="form">
            <form>
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                                <div class="col-2"><label for="nom">Nom</label></div>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="" id="nom">
                                </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-2"><label for="">Prénoms</label></div>
                            <div class="col-8">
                                <input class="form-control" type="text" name="" id="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <div class="row">
                            <div class="col-2"><label for="">Mois</label></div>
                            <div class="col-5"><input class="form-control" type="month" name="" id=""></div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <div class="col-2">Période</div>
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-2">
                                            <input class="form-control" type="number" name="" id="">
                                            
                                    </div>
                                    <label for="">  au  </label>
                                    <div class="col-2">
                                            
                                            <input class="form-control" type="number" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <form class="form">
                    <div class="row">
                            <div class="col-">
                                    <label for="">Salaire de base</label>  
                            </div>
                            <div class="col-">
                                    <input class="form-control" type="number" name="" id="">
                            </div>
                        </div>
                        
                        
            
                        <div class="row">
                                <div class="col-">
                                    <label for="">Prime d'ancienneté</label>
                                </div>
                                <div class="col-">
                                    <input class="form-control" type="number" name="" id="">
                                </div>
                            </div>
                        
                        
            
                        <div class="row">
                                <div class="col-">
                                    <label for="">Prime de caisse</label>
                                </div>
                                <div class="col-">
                                    <input class="form-control" type="number" name="" id="">
                                </div>
                            </div>
                        
            
            
                        <div class="row">
                                <div class="col-">
                                    <label for="">Prime de responsabilité</label>
                                </div>
                                <div class="col-">
                                    <input class="form-control" type="number" name="" id="">
                                </div>
                            </div>
                        
                        
            
                        <div class="row">
                                <div class="col-">
                                    <label for="">Indemnité de logement</label>
                                </div>
                                <div class="col-">
                                    <input class="form-control" type="number" name="" id="">
                                </div>
                            </div>
                        
                        
            
                        <div class="row">
                                <div class="col-">
                                    <label for="">Indemnité de représentation</label>
                                </div>
                                <div class="col-">
                                    <input class="form-control" type="number" name="" id="">
                                </div>
                            </div>
                        
                        
            
                        <div class="row">
                                <div class="col-">
                                    <label for="">Prime d'habillement</label>  
                                </div>
                                <div class="col-">
                                    <input class="form-control" type="number" name="" id="">
                                </div>
                            </div>
                        
                        
            
                        <div class="row">
                                <div class="col-">
                                    <label for="">Prime de déplacement</label>
                                </div>
                                <div class="col-">
                                    <input class="form-control" type="number" name="" id="">
                                </div>
                            </div>
                        
                        
            
                        <div class="row">
                                <div class="col-">
                                    <label for="">Prime d'encouragement</label>
                                </div>
                                <div class="col-">
                                    <input type="number" name="" id="">
                                </div>
                            </div>
                        
                        
            
                        <div class="row">
                                <div class="col-">
                                    <label for="">Prime de santé</label> 
                                </div>
                                <div class="col-">
                                    <input type="number" name="" id="">
                                </div>
                            </div>
                        
                        
            
                        <div class="row">
                                <div class="col-">
                                    <label for="">Prime de terrain</label>
                                </div>
                                <div class="col-">
                                    <input type="number" name="" id="">
                                </div>
                            </div>
                        
                        
            
                        <div class="row">
                                <div class="col-">
                                    <label for="">Prime de jours fériés</label> 
                                </div>
                                <div class="col-">
                                    <input type="number" name="" id="">
                                </div>
                            </div>
                        
                        
            
                        <div class="row">
                                <div class="col-">
                                    <label for="">Prime semestrielle</label>
                                </div>
                                <div class="col-">
                                    <input type="number" name="" id="">
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-">
                                    <label for="">Prime sur ouverture de compte</label>    
                                </div>
                                <div class="col-">
                                    <input class="form-control" type="number" name="" id="">
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-">
                                    <label for="">CNSS</label>
                            </div>
                            <div class="col-">
                                <input class="form-control" type="text" name="" id="">
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="col-">
                                <label for="">IRPP</label>
                            </div>
                            <div class="col-">
                                <input class="form-control" type="text" name="" id="">
                            </div>
                        </div>

                        <div class="row"> 
                                <div class="col-">
                                    <label for="">IRPP</label>
                                </div>
                                <div class="col-">
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>

                        <div class="row"> 
                            <div class="col-">
                                <label for="">IRPP</label>
                            </div>
                            <div class="col-">
                                <input class="form-control" type="text" name="" id="">
                            </div>
                            </div>

                        <div class="row"> 
                            <div class="col-">
                                <label for="">IRPP</label>
                            </div>
                            <div class="col-">
                                <input class="form-control" type="text" name="" id="">
                            </div>
                        </div>
            </form>
        </form>
    </div>
@endsection
