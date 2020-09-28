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
        <input type="text" id="name" name="user_first_name">
    </div>
    <div>
        <label for="courriel">courriel :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="phone">N° de téléphone :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="sujet">Sujet :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
</form>
  </body>
</html>
