<?php
include("Connect-to-mysql.php");

function addContact($connection, $name, $telephone, $email){
    $query = "insert into contacts (name, telephone, email) values ('{$name}','{$telephone}','{$email}')";
    return mysqli_query($connection, $query);   
}

function getContacts($connection){
    $query = "select * from contacts";
    $contacts = array();
    $result = mysqli_query($connection, $query);
    while($contact=mysqli_fetch_assoc($result)){
        array_push($contacts,$contact);
    }
    return $contacts;
}

