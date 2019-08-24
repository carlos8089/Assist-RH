<!DOCTYPE html>
<html>
<head>
<style>

/*                                       styles for vertical nav                               */

.navigation{
 height: 820px;
  float: left;
  width: 20%;
  background-color: #ffffff;
}

.navigation ul {

  list-style-type: none;
  margin: 0;
  padding: 0;
  background-color: #ffffff;
  position: static;
  height: 100%;
  overflow: auto;
}

.navigation li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

.navigation li a.active {
  background-color: #ffffff;
 color: white;  
}

.navigation li a:hover:not(.active) {
  background-color: #ffd633;
  color: white;
}

/*                         styles for main container page                           */



</style>
</head>
<body>
<div >
    <div class="navigation">
        <ul>
        <li><a href="{{route('home')}}">Accueil</a></li>
        <li><a href="{{route('fiche')}}">Gestion de la paie</a></li>
        <li><a href="{{route('employe.index')}}">Gestion du personnel</a></li>
        <li><a href="{{route('utilisateurs')}}">Gestion des profils</a></li>
        <li><a href="{{route('parametres')}}">Paramètres</a></li>
        <li><a href="">aide</a></li>

        </ul>
    </div>
    
     
</div>


</body>
</html>