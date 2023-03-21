<!-- Affichage du contenu de la ligne -->
<p><?php echo $contenu; ?></p>

<!-- Affichage de la question de la ligne -->
<p><?php echo $question; ?></p>

<!-- Formulaire pour la réponse à la question -->
<form action='Challenge' method='post'>
    <input type='text' name='reponse' />
    <input type='submit' value='Valider' />
</form>

<!-- Ligne de séparation -->
<hr />