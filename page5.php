<!DOCTYPE html>
<html>
<head>
    <title> page5</title>
 </head>
 <body>
    <form action="page5.php" method="post">
        <label for="matricule">matricule</label>
        <input type="text" required name="matricule" id="color" />
        <br />
        <br />
        <label for="nom">nom</label>
        <input type="text" required name="nom" id="color" />
        <br />
        <br />
        <label for="prenom">prenom</label>
        <input type="text"  required name="prenom" />
        <br />
        <br />
        <label for="sexe">sexe</label> 
        <input type="radio" required name="sexe" value="masculin" /> masculin
        <input type="radio" required name="sexe" value="feminin" /> feminin 
        <br />
        <br />
        <label for="adresse">adresse</label>
        <textarea name="adresse" id="" cols="30" rows="2"> </textarea>
        <br />
        <br />
        <label for="service">service</label>
        <select required name="service" class="service">
            <option value="choix"> choisir </option>
            <option value="choix1"> choix1</option>
            <option value="choix2"> choix2 </option>
        </select>
        <br />
        <br />
        
        <label for="fonction">fonction</label>
        <select required name="fonction">
            <option value="choix"> choisir </option>
            <option value="choix1"> choix1</option>
            <option value="choix2"> choix2 </option>
        </select>
        <br />
        <br />

        <input type="submit" name="envoyer" value="valider" />
        <input type="reset" value="réinitialiser" />
    </form>

    <?php
        if(isset($_POST["envoyer"])) {
    ?> 
        <table border="2">
            <thead>
                <th>matricule</th>
                <th>nom</th>
                <th>prenom</th>
                <th>sexe</th>
                <th>adresse</th>
                <th>service</th>
                <th>fonction</th>
            </thead>

            <tbody>
                <tr>
                    <td><?php echo $_POST["matricule"] ?></td>
                    <td><?php echo $_POST["nom"] ?></td>
                    <td><?php echo $_POST["prenom"] ?></td>
                    <td><?php echo $_POST["sexe"] ?></td>
                    <td><?php echo $_POST["adresse"] ?></td>
                    <td><?php echo $_POST["service"] ?></td>
                    <td><?php echo $_POST["fonction"] ?></td>
                </tr>
            </tbody>

        </table>
    <?php
        }

    ?>
    <style>
        #color {
            background-color:pink;
        }
        input['submit']{
            background-color:dark gray;

        }
        .service{
            width:150px;
        }
    </style>
</body>
</html>

