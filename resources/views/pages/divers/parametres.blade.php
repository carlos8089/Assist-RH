@extends('templates.base')
@section('element1')
<style>
        .main{
            padding: 20px;
            background-color: #ffffff;
            overflow: auto;    
        }
        section{
            margin-bottom: 30px;
        }
        button{
            float: right;
        }
    </style>
    <div class="main">
            
            <H2>Adaptez Assist-RH à vos besoins</H2>

                <div class="container">
                    <section>
                        <p><h3>Ajouter une agence</h3></p>
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
                    </section>
                </div>
        

       
            <div class="container">
                <section>
                    <p><h3>Ajouter un poste</h3></p>
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
                </section>
            </div>
            
        <section>

        </section>
            
@endsection
