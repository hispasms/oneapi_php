<?php

use hispaSMS\DataConnectionProfileClient;
use hispaSMS\utils\Logs;

require_once __DIR__ . '/../vendor/autoload.php';

$client = new DataConnectionProfileClient(USERNAME, PASSWORD);
$client->login();

# example:retrieve-roaming-status-with-notify-url
$response = $client->retrieveRoamingStatus(DESTINATION_ADDRESS, NOTIFY_URL);
// if there is no error the query has been succesfully executed
if(!$response->isSuccess()) {
    echo 'Error:', $response->exception, "\n";
    Logs::printLogs();
}
# ----------------------------------------------------------------------------------------------------

echo $response;
echo NOTIFY_URL;