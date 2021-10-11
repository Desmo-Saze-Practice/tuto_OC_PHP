<?php include("header.php"); ?>
<?php include('menu.php');?>

<form action="cible.php" enctype="multipart/form-data" method="post">
    <p>
        Pseudo <input type="text" name="pseudo" placeholder="Pseudo" />

        <textarea name="message" rows="8" cols="45" placeholder="Votre message ici."></textarea>

        <select name="choix">
            <option value="choix1">Choix 1</option>
            <option value="choix2">Choix 2</option>
            <option value="choix3">Choix 3</option>
            <option value="choix4">Choix 4</option>
        </select>

        Aimez-vous les frites ?
        <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
        <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>

        Formulaire d'envoi de fichier :<br />
        <input type="file" name="monfichier" /><br />

        <input type="submit" value="Valider" />
    </p>
</form>

<?php include("footer.php"); ?>