<?php
  require_once'traitement.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
      <meta charset="utf-8">
      <title>Formulaire</title>
      <head>
        <body>

        <form action="index.php" method="post">
          <table>
            <thead>
              <tr>
                  <th><label for="txtnom">Votre nom:</label></th>
                    <th><label for="txtprenom">Votre Prenom:</label></th>
                      <th>  <label for="txteamil">Votre email:</label></th>
                        <th><label for="txtprenom">Votre message:</label></th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                      <td><input type="text" name="txtnom" placeholder="Nom:Fleurine" required/></td>
                      <td><input type="text" name="txtprenom" placeholder="Ex:Kenley" required/></td>
                      <td><input type="email" name="txtemail" placeholder="Ex:fleurinekenley@gmail.com" required/></td>
                      <td><textarea name="txtmessage" placeholder="Laissez votre messaje ici"></textarea></td>
                      <td><input type="submit" name="btndeposer" value="Deposer le message"/></td>
                  </tr>
            </tbody>

          </table>









          </form>
        </body>

</html>
