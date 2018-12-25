<?php
require 'IP2Location.php';
 
$loc = new IP2Location('databases/IP-COUNTRY.BIN', IP2Location::FILE_IO);
$record = $loc->lookup($_SERVER['REMOTE_ADDR'], IP2Location::ALL);
 
if($record == 'CA') {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: https://www.cpagrip.com/show.php?l=0&u=175861&id=22391&tracking_id=');
    exit;
}
 
?>
