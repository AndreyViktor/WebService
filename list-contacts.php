<?php
include("DAOcontacts.php");

header("Content-Type: application/json");

$contacts = getContacts($connection);
echo json_encode(array("contacts"=>$contacts));
mysqli_close($connection);
