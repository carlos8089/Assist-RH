@php
    session_start();
@endphp
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
    <form action="" method="GET" class="form-horizontal" id="entete">
        
        @csrf
        <div class=" card">
            <div class=" card-header">
                <h4> Données d'en-tête</h4>
            </div>
            <div class=" card-body">
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
            
            
            
      <!--  <div class="form-control">
            <input type="button" value="Suivant" onclick="envoyer()">
        </div>  -->
            <div>
                <input type="button" value="Manuel" class="btn btn-success" onclick="envoieManuel()">
                <input type="button" value="Automatique" class="btn btn-success" onclick="envoieAuto()">
            </div>
        </form>
 
    </div>
    <script>
        function envoieAuto(){
           var frm=document.getElementById('entete');
            frm.action="{{ route('bulletinPage2') }}";
            frm.submit();
        }
        function envoieManuel(){
            var frm=document.getElementById('entete');
            frm.action="{{ route('bulletin.create') }}";
            frm.submit();
        }
    </script> 
@endsection

