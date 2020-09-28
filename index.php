<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>formulaire PHP</title>
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  </head>
  <body>
    <h1>Formulaire de contact</h1>
    <form action="/ma-page-de-traitement" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="first_name" name="user_first_name">
    </div>
    <div>
        <label for="courriel">courriel :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="phone">N° de téléphone :</label>
        <input type="text" id="phone" name="user_phone">
    </div>
    <div>
        <label for="sujet">Sujet :</label>
        <select id="sujet" name="sujet">
            <option value="reclamations">réclamation</option>
            <option value="conseilCommercial">conseil commercial</option>
            <option value="securite">Alerte de sécurité</option>
            <option value="autre">Autre chose, précisez dans le message</option>
        </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
</form>
  </body>
</html>
