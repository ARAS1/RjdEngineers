<?php

include 'register.html';

if (isset($_POST['Submit'])){
    
$firstName = $_POST['firstNameFd'];
$lastName = $_POST['lastNameFd'];
$userName = $_POST['userNameFd'];
$emailAddress = $_POST['emailAddressFd'];
$addressLine1 = $_POST['addressLine1Fd'];
$addressLine2 = $_POST['addressLine2Fd'];
$cityTown = $_POST['cityTownFd'];
$country = $_POST['countryFd'];
$postCode = $_POST['postCodeFd'];
$password = $_POST['passwordFd'];
$confirmPassword = $_POST['confirmPasswordFd'];

echo $userName;
echo $lastName;
echo $userName;

}
?>