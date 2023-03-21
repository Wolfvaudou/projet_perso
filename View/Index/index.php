<h1>Index</h1><br>
<?php

foreach($challenges as $challenge)
{ ?>
   <h3><a href="challenge?id_challenge=<?= $challenge->id ?>"> <?= $challenge->title ?></a></h3>

<?php
}
?>