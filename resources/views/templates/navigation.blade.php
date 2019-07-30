<!DOCTYPE html>
<html>
<head>
<style>

/*                                       styles for vertical nav                               */

.navigation{
  margin: 30px;
  float: left;
  width: 20%;
  height: 700px;
  border-radius: 5%, 5%;;
  box-shadow: 0 4px 3px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: #4CAF50;
}

.navigation ul {

  list-style-type: none;
  margin: 0;
  padding: 0;
  background-color: #f1f1f1;
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
  background-color: #4CAF50;
 /color: white;  
}

.navigation li a:hover:not(.active) {
  background-color: gray;
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
        <li><a href="{{route('fiche')}}">Gérer la paie</a></li>
        <li><a href="{{route('personnel')}}">Gérer le personnel</a></li>
        <li><a href="{{route('parametres')}}">Paramètres</a></li>
        <li><a href="">Mon profil</a></li>
        <li><a href="">aide</a></li>
        </ul>
    </div>
    @yield('contenu')
     
</div>


</body>
</html>