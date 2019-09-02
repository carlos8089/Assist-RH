@extends('templates.base')
@section('element1')
<style>
        .main{
            padding: 20px;
            background-color: #ffffff;
            overflow: auto;    
        }
       
        button{
            float: right;
        }
        .card{
            margin-bottom: 40px;
        }
    </style>
    <div class="main">
            
        <H2>Adaptez Assist-RH à vos besoins</H2>

            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3>Ajouter une agence</h3>
                    </div>
                    <div class=" card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-3"><label for="">Nom</label></div>
                                <div >
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                                
                        </form>
                    </div>
                </div>
            </div>
        
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3>Ajouter un poste</h3>
                    </div>
                    <div class=" card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-3"><label for="">Libellé</label></div>
                                <div>
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3>Ajouter un type de contrat</h3>
                    </div>
                    <div class=" card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-3"><label for="">Libellé</label></div>
                                <div >
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                            
                        </form>
                    </div>
                </div>

            </div>
            
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3>Ajouter une catégorie d'employé</h3>
                    </div>
                    <div class=" card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-3"><label for="">Nom</label></div>
                                <div >
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                    
                    
                </section>
            </div>
            
     
            
@endsection
