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
        form{
            margin-bottom: 30px;
        }
    </style>
    <div class="main">
        <h3>Créer un nouveau bulletin de paie</h3>
        <form action="" method="post">
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
            <label for="">Salaire de base</label>
            <input type="number" name="" id="">

            <label for="">Prime d'ancienneté</label>
            <input type="number" name="" id="">

            <label for="">Prime de caisse</label>
            <input type="number" name="" id="">

            <label for="">Prime de responsabilité</label>
            <input type="number" name="" id="">

            <label for="">Indemnité de logement</label>
            <input type="number" name="" id="">

            <label for="">Indemnité de représentation</label>
            <input type="number" name="" id="">

            <label for="">Prime d'habillement</label>
            <input type="number" name="" id="">

            <label for="">Prime de déplacement</label>
            <input type="number" name="" id="">

            <label for="">Prime d'encouragement</label>
            <input type="number" name="" id="">

            <label for="">Prime de santé</label>
            <input type="number" name="" id="">

            <label for="">Prime de terrain</label>
            <input type="number" name="" id="">

            <label for="">Prime de jours fériés</label>
            <input type="number" name="" id="">

            <label for="">Prime semestrielle</label>
            <input type="number" name="" id="">

            <label for="">Prime sur ouverture de compte</label>
            <input type="number" name="" id="">

            <label for="">CNSS</label>
        </form>
    </div>
@endsection
