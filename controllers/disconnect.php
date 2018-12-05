<?php

require __DIR__.'/../lib/Util.class.php';

// Check if the user is logged in the API
Util::checkLoggedInAPI();

http_response_code(204);
session_destroy();

?>