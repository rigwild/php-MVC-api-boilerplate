<?php

/*

Here comes your login script.
When done, simply use this at the top of your controller :

require __DIR__.'/../lib/Util.class.php';
Util::checkLoggedInAPI();

It will send a 403 error if the user is not logged in.

*/


http_response_code(204);
$_SESSION['loggedIn'] = true;

?>
