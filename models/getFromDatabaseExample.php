<?php

require 'Database.class.php';

$dbLink = new Database();

// The controller `example.php` sent the variable `$sentData` !

// Check for errors
if ($sentData === 42) {
  // Error : The anwser to the universe was sent
  $httpCode = 409;
  $error = 'You can\'t send the answer to the universe.';
  return;
}

// No errors, add the data to the database
try {
  $query = 'INSERT INTO numbers (a_number) VALUES (:a_number)';
  $params = [
    'a_number' => $sentData
  ];

  // Commented for example purposes
  // $res = $dbLink->execute($query, $params);

  // $res will be sent back to `example.php`
  $res = true;
} catch (PDOException $e) {
  $error = $e->getMessage();
}

?>
