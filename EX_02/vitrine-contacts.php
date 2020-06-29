<!DOCTYPE html>

<html> 
    
    <style>

    </style>

    <head>

    <title>Accueil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="vitrine.css">

    </head>

<body>
    
<?php
include 'header.php'
?>

<footer class="container">

</footer>

<section>
<h2>Contact</h2>
<p id="pnavig">

</p>


</section>

<form action="/ma-page-de-traitement" method="post">
    <div>
        <label for="name">Nom et prénom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">E-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="msg">Des questions ?</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
</form>

<div class="button">
    <button type="submit">Envoyer le message</button>
</div>

</body>

</html>
