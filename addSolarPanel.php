<?php
require_once("header.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ADD PRODUCTS </title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <h1 style="margin:auto; "> Adauga produs</h1>
    <form action="addPaneltoDB.php" method="post"  style="margin: auto; width: 550px;  ">
<div class="form-group"  >
    <label for="exampleInputEmail1">Denumire Produs</label>
    <input type="text" class="form-control" id="produs" >
     </div>

     <div class="form-group"  >
    <label for="exampleInputEmail1">Pret fara TVA</label>
    <input type="text" class="form-control" id="pretFaraTVA" >
     </div>
    


  <div class="form-group">
    <label for="exampleInputEmail1">Putere nominala </label>
    <input type="text" class="form-control" id="puterenominal" >
     </div>

        <div class="form-group">
    <label for="exampleInputEmail1">Tensiune OPEN CIRCUIT</label>
    <input type="text" class="form-control" id="tensiune" >
     </div>

     <div class="form-group">
    <label for="exampleInputEmail1">Curent Short Circuit</label>
    <input type="text" class="form-control" id="curentSC" >
     </div>

     <div class="form-group">
    <label for="exampleInputEmail1">Tensiune Nominala</label>
    <input type="text" class="form-control" id="tensiune" >
     </div>

     <div class="form-group">
    <label for="exampleInputEmail1">Curent Nominal</label>
    <input type="text" class="form-control" id="curentN" >
     </div>

     <div class="form-group">
    <label for="exampleInputEmail1">Eficienta modul</label>
    <input type="text" class="form-control" id="eficienta" >
     </div>

     <div class="form-group">
    <label for="exampleInputEmail1">Toleranta putere panou</label>
    <input type="text" class="form-control" id="toleranta" >
     </div> 

     <div class="form-group">
    <label for="exampleInputEmail1">Tensiune sistem</label>
    <input type="text" class="form-control" id="tensiuSys" >
     </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Nominal siguranta</label>
    <input type="text" class="form-control" id="nominalSiguranta" >
     </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Tip celula</label>
    <input type="text" class="form-control" id="tipCelula" >
     </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Numar celula in panou</label>
    <input type="text" class="form-control" id="nrCelule" >
     </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Dimensiuni panou</label>
    <input type="text" class="form-control" id="dimeniune" >
     </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Greutatea panou</label>
    <input type="text" class="form-control" id="greutate" >
     </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Tip cuplare</label>
    <input type="text" class="form-control" id="tipCuplare" >
     </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Certificare</label>
    <input type="text" class="form-control" id="certificare" >
     </div>
 
  <button type="submit" class="btn btn-primary">Add Product</button>
</form>
    
  </body>
</html>
<?php
require_once("footer.php");
?>

