@extends('templates.base')
@section('element1')
<style>
        .main{
            padding: 20px;
            background-color: #f1f1f1;
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
    </style>
    <div class="main">
            
            <H2>Gestion automatisée du personnel</H2>

            <input type="button" value="Créer un nouveau salarié" id="create" class="btn btn-primary">
            <input type="button" value="Liste des salariés" id="liste" class="btn btn-primary">
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
                                background-color: #6bc782;
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
                              <button class="tablinks" onclick="openCity(event, 'CV')"><strong>Curiculum Vitae</strong> </button>
                            </div>
                            
                            <div id="Civilite" class="tabcontent">
                                <section>
                                    <h4>Identité</h4>
                                    <label for="nom">Nom</label><input type="text" name="iNom" id="nom">
                                    <label for="prenom">Prénoms</label><input type="text" name="iPrenom" id="prenom">
                                    <label for="nais">Né(e) le</label><input type="date" name="idateNais" id="nais">
                                    <label for="lieuNais">À</label><input type="text" name="ilieuNais" id="lieuNais">
                                </section>
                                <section>
                                    <h4>Situation sociale</h4>
                                    <label for="sitMat">Situation matrimoniale</label><input type="text" name="isitMat" id="sitMat">
                                    <label for="nbEnfant">Nombres d'enfants</label><input type="text" name="inbEnfant" id="nbEnfant">
                                </section>
                            </div>
                            
                            

                            <div id="CV" class="tabcontent">
                                jhvuivujggui
                                huigbbi <br>
                                <p>hguyyugl_g</p>
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
            </div>
@endsection