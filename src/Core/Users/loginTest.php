<?php


$email 	        = 'fahad@impelsys.com';
$password	    = 'impelsys';

$loginObj       = new login($email, $password);

$userDetails    = $loginObj->checkPassword();
$loginObj->setFirstName($userDetails['firstName']);
$loginObj->setLastName($userDetails['lastName']);
$userId         = $loginObj->getId();
$loginObj->setUpdatedAt(date("Y-m-d H:i:s"));


