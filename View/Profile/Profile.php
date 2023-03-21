<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="accueil.css"/>
        <title>Hackcode</title>
       <div> 
        <p>prénom nom (menu déroulant)</p>
        </div>
        <form method="POST" action="profile.php">             
            <p class="account_update">
                <div>
                    <label for="nickname">prénom</label>
                    <input type="text" id="nickame" name="nickname">
                </div>
                <div>
                    <label for="name">nom</label>
                    <input type="text" id="name" name="name">
                </div>
                <div>
                    <label for="mail">email-example@gmail.com</label>
                    <input type="text" id="mail" name="mail">
                </div>
                 <div>
                <label for="pass">Nouveau mot de passe (8 caractères minimum):</label>
                <input type="password" id="pass" name="password"
                    minlength="8" required>
                </div>
                <div>
                <label for="pass">nouveau mot de passe (8 caractères minimum):</label>
                <input type="password" id="pass" name="password"
                    minlength="8" required>
                </div>
            
        
                <input type="submit" value="mettre a jour son compte">
            </p>
        </form>
</html>