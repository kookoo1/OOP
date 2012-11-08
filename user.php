<?php

require_once 'includes/User.php';

$xavier = new Customer('xavier',17);
$john = new Customer('john',45);

echo $xavier->getUsername().' - '.$john->getUsername();


?>
