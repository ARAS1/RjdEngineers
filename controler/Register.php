<?php
include '../model/Account.php';
if (isset($_POST['submitBtn'])){   
$model = new Account();  
$model->firstName = $_POST['firstNameFd'];
$model->lastName = $_POST['lastNameFd'];
$model->userName = $_POST['userNameFd'];
$model->emailAddress = $_POST['emailAddressFd'];
$model->addressLine1 = $_POST['addressLine1Fd'];
$model->addressLine2 = $_POST['addressLine2Fd'];
$model->cityTown = $_POST['cityTownFd'];
$model->country = $_POST['countryFd'];
$model->postCode = $_POST['postCodeFd'];
$model->password = $_POST['passwordFd'];
$model->confirmPassword = $_POST['confirmPasswordFd'];
}
 echo $firstName;
 echo $lastName;
 echo $userName;
 echo $emailAddress;
 echo $addressLine1;
 echo $addressLine2;
 echo $cityTown;
 echo $country;
 echo $postCode;
 echo $password;
 echo $confirmPassword;
 
 echo "---------model output---------";
 
 echo $model->firstName;
 echo $model->lastName;
 echo $model->userName;
 echo $model->emailAddress;
 echo $model->addressLine1;
 echo $model->addressLine2;
 echo $model->cityTown;
 echo $model->country;
 echo $model->postCode;
 echo $model->password;
 echo $model->confirmPassword;
 
 
?>
