<?
require('vendor/autoload.php')
use Meetup\Login\Core\Users\classUser

$email 	= $_REQUEST['email'];
$password	= $_REQUEST['password'];
$user = new User($email, $password);
$userDetails = $user->checkPassword();
$user->setFirstName($userDetails['firstName']);
$user->setLastName($userDetails['firstName']);
$user->setCreatedAt($userDetails['createdAt']);
$user->setUpdatedAt(date("Y-m-d H:i:s"));