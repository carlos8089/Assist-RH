@extends('templates.base')
@section('element1')
<style>
        .main{
            padding: 20px;
            background-color: #f1f1f1;
            overflow: auto;
            
        }
        #create{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-bottom: 10px;
            color: #f1f1f1;
            background-color: #6199d1;
            border-radius: 8px;
        }
    </style>
    <div class="main">
            
            <H2>Gestion automatisée du personnel</H2>

            <input type="button" value="Créer un nouveau salarié" id="create">
            <div>
                    <style>
                            body {font-family: Arial;}
                            
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
                              <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
                              <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
                              <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
                              <button class="tablinks" onclick="openCity(event, 'blabla')">ed</button>
                            </div>
                            
                            <div id="London" class="tabcontent">
                              <h3>London</h3>
                              <p>London is the capital city of England.</p>
                            </div>
                            
                            <div id="Paris" class="tabcontent">
                              <h3>Paris</h3>
                              <p>Paris is the capital of France.</p> 
                            </div>
                            
                            <div id="Tokyo" class="tabcontent">
                              <h3>Tokyo</h3>
                              <p>Tokyo is the capital of Japan.</p>
                            </div>

                            <div id="blabla" class="tabcontent">

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
@section('element2')
    @extends('templates.action')

@endsection