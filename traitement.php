<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>traitement message</title>
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  </head>
  <body>
    <h1>Jusque là, tout va bien</h1>
    <p>salut <?php echo $_POST['user_first_name']; ?> <?php echo $_POST['user_name']; ?>
        , don adresse de courriel est: <?php echo $_POST['user_mail']; ?> et ton numéro de 
        téléphone est le: <?php echo $_POST['user_phone']; ?></p>
    <p>nous allons traiter ton massage à propos de <?php echo $_POST['user_subject']; ?></p>
	<p>voici ton message: </p>
    <p><?php echo $_POST['user_message']; ?></p>
  </body>
</html>
