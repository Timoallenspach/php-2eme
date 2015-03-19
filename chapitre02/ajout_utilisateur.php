<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
  </head>
<body>
<form action="ajout_utilisateur_post.php" method="post">
    <div>
        <label for="nom">Login :</label>
        <input type="text" name="login" id="login" />
    </div>
    <div>
        <label for="courriel">Mot de passe :</label>
        <input type="password" name="motpasse" id="motdepasse" />
    </div>
    <div>
        <label for="majeur" name="age" >Majeur :</label>
        <select>
            <option value="1">Oui</option>
            <option value="0">Non</option>
        </select>
    </div>
    <div>
        <label for="Type">Type :</label>
        <input type="radio" name="type" value="Homme" /> Homme
        <input type="radio" name="type" value="Femme" /> Femme
    </div>
    <div>
        <label for="option" >Option :</label>
        <input type="checkbox" name="option" id="lettre" value="Lettre de nouvelle" /> Lettre de nouvelle
        <input type="checkbox" name="option" id="soutient" value="Membre de soutient" /> Membre de soutient
    </div>
    <div class="button">
        <button type="submit">S'inscrire</button>
    </div>
</form>
</body>
</html>
