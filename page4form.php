<?php
if($_POST) {
echo 'Contenu de la variable $_POST : >';
print_r($_POST);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
  <form action="page5info.php" method="post">
  <div class="form-group row">
    <label for="inputMat" class="col-sm-2 col-form-label" >Matricule</label>
    <div class="col-sm-6">
      <input type="" class="form-control" id="inputMat" name="Matricule" placeholder="Entrer le Matricule">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-6">
      <input type="" class="form-control" id="inputName" name="Nom" placeholder="Entrer son Nom">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputSec" class="col-sm-2 col-form-label">Prenom</label>
    <div class="col-sm-6">
      <input type="" class="form-control" id="inputSec" name="Prenom" placeholder="Entrer son prénom">
    </div>
  </div>

<div class="col-sm-12">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" name="Homme" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Homme</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" name="Femme" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Femme</label>
</div>

<div>
<div class="mb-3">
    <textarea class="col-8" id="validationTextarea" placeholder="Entrer votre adresse" name="Adresse"></textarea>
</div>

<div>
<div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Service</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Service">
        <option selected>Service</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
</div>

<div>
<div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Fonction</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Fonction">
        <option selected>Fonction</option>
        <option value="1">Un</option>
        <option value="2">Deux</option>
        <option value="3">Trois</option>
      </select>
    </div>
</div>

</div>
             <div class="form-group row">
                 <div class="offset-sm-4 col-sm-2">
                     <button type="submit" class="btn btn-secondary" name="btn_submit" value="init">réinitialiser</button>
                 </div>
                 <div class=" col-sm-2">
                     <button type="submit" class="btn btn-primary" name="btn_submit" value="Valide">valider</button>
                 </div>
             </div>

             <div class=" ">  
                     <button type="submit" class="btn btn-primary" name="btn_submit" value="Donnees"><a href="page5info.php"> Les Données</button> 
                 </div>
             </div>

</form>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>