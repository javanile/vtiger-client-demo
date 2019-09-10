<?php

require_once __DIR__.'/vendor/autoload.php';

use Javanile\VtigerClient\VtigerClient;

echo '<pre>';

$client = new VtigerClient('http://vtiger');

$resp = $client->login('admin', 'LmUOHAAFAeIbQMyM');

echo "<b>Login response:</b> "; var_dump($resp);

$reps = $client->upload([
    'notes_title' => 'My document',
    'assigned_user_id' => 1,
    'filelocationtype' => 'I',
    'filestatus' => 1,
    'filename' => __DIR__.'/document.pdf',
]);

echo "<b>Upload response:</b> "; var_dump($resp);

echo '</pre>';
