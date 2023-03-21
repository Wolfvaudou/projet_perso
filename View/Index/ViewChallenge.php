<?php switch($_GET["id"]) {
   case 1 :

       $url = "challenge";

if(headers_sent() == false){

header('Location: '.$url); // Redirection vers l'url donnée.

                // Interruption du script.

exit(); 
}

// Redirection vers l'url donnée et interruption du script.

exit('<html><head><meta http-equiv="refresh" content="0;URL='.$url.'" /></head>  </html>');
   } ?>