<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="page_accueil.css"/>
        <title>Hackcode</title>
    </head>
    <form method="POST" action="Signup">             
        <p class="création_compte">
            <div>
                <label for="nickname">nickname</label>
                <input type="text" id="nickame" name="nickname">
            </div>
            <div>
                <label for="name">name</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="mail">email</label>
                <input type="text" id="mail" name="mail">
            </div>
            <div>
                <label for="username">username</label>
                <input type="text" id="username" name="username" value=-example@gmail.com>
            </div>
             <div>
            <label for="password">Mot de passe (8 caractères minimum):</label>
            <input type="password" id="pass" name="password"
                minlength="8" required>
            </div>
    
            <input type="submit" value="Créer un compte">
        </p>
    </form>
</br>Déjà un compte?<a href="Login">Se connecter</a>
</html>