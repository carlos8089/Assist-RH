<!DOCTYPE html>
<html>
<head>
<style>

/*                                       styles for vertical nav                               */

.action{
  width:10%;
  text-align: center;
  float: right;
  margin: 30px;
  box-shadow: 0 4px 3px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: #4CAF50;
  position: static;
  overflow: auto;
}
#Imprimer{
    width: 100%;
}



</style>
</head>
<body>
<div >
    <div class="action">
        <input type="button" value="Imprimer" id="Imprimer" class="btn btn-primary">
    </div>
    @yield('contenu')
     
</div>


</body>
</html>