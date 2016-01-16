<?php
include '../model/Account.php';
include '../register.html';

if ($_POST['/controler/Register.php'] == 'Submit'){
  $model = new Account();  
$model -> firstName = $_POST['firstNameFd'];
$$model ->lastName = $_POST['lastNameFd'];
$$model ->userName = $_POST['userNameFd'];
$$model ->emailAddress = $_POST['emailAddressFd'];
$$model ->addressLine1 = $_POST['addressLine1Fd'];
$$model ->addressLine2 = $_POST['addressLine2Fd'];
$$model ->cityTown = $_POST['cityTownFd'];
$$model ->country = $_POST['countryFd'];
$$model ->postCode = $_POST['postCodeFd'];
$$model ->password = $_POST['passwordFd'];
$$model ->confirmPassword = $_POST['confirmPasswordFd'];

print $userName;
echo $lastName;
echo $userName;

}

print $userName;
echo $lastName;

include '../index.html';
?>