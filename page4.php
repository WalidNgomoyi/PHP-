<?php
if($_POST) {
echo 'Contenu de la variable $_POST : >';
print_r($_POST);
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page 4</title>
	<link rel="stylesheet" type="text/css" href=" ">	
</head>
<form method="post" action="page4a.php">
<label for="Matricule"> Matricule : </label><input type="text" name="mat"  placeholder="Numero" /><br/><br/>
<label for="nom"> Nom : </label><input type="text" name="nom" id="nom" placeholder="Entrez votre nom" /><br/><br/>
<label for="prenom">Prénom : </label><input type="text" name="prenom" id="prenom" placeholder="Entrez votre Prenom" /><br/><br/>
<p>Sexe :
<input type="checkbox" name="Sex" value="H" checked /> Masculin
<input type="checkbox" name="Sex" value="F" /> Féminin
</p>
<br/><br/>
<textarea name="message" rows="8" cols="45" placeholder="Entrez Adresse" >
</textarea>
</br></br>
<select name="Service">
    <option name="Ser1">Service1</option>
    <option name="Ser2">Service2</option>
</select>
</br> </br> </br>
<select name="Fonction">
    <option name="Ing">Ingenieur</option>
    <option name="Comp">Comptabilité</option>
    <option name="Mark">Marketing</option>
    <option name="RH">R.H</option>
</select>
</br></br>
<input type="submit" name="btVal" value="Valider">
<input type="submit" name="btRe" value="Réinitialiser">
</form>
</body>
</html>