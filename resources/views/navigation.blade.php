<!DOCTYPE html>
<html>
<head>
<style>
div.navigation{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.navigation ul {

  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 15%;
  background-color: #f1f1f1;
  position: fixed;
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
 /* color: white;  */
}

.navigation li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>
<div class="navigation">
  <ul>
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#about">About</a></li>
  </ul>
</div>




</body>
</html>