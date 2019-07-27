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

.main{
  float: left;
  margin: 30px;
  width: 50%;
  background-color: #f1f1f1;
  padding: 50px;
}

</style>
</head>
<body>
<div >
    <div class="navigation">
        <ul>
          <li><a class="active" href="#home">Home</a></li>
          <li><a href="#news">News</a></li>
        </ul>
    </div>
    @yield('contenu')
     
</div>


</body>
</html>