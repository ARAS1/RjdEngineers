<?php
include '../model/Account.php';
if (isset($_POST['submitBtn'])){   
$model = new Account();  
$model->firstName = htmlspecialchars($_POST['firstNameFd']);
$model->lastName = htmlspecialchars($_POST['lastNameFd']);
$model->userName = htmlspecialchars($_POST['userNameFd']);
$model->emailAddress = htmlspecialchars($_POST['emailAddressFd']);
$model->addressLine1 = htmlspecialchars($_POST['addressLine1Fd']);
$model->addressLine2 = htmlspecialchars($_POST['addressLine2Fd']);
$model->cityTown = htmlspecialchars($_POST['cityTownFd']);
$model->country = htmlspecialchars($_POST['countryFd']);
$model->postCode = htmlspecialchars($_POST['postCodeFd']);
$password = htmlspecialchars($_POST['passwordFd']);
$confirmPassword = htmlspecialchars($_POST['confirmPasswordFd']);
}

$CreationDate = new DateTime('now');
$LastLogin = new DateTime('now');
$IsActive =0;
$passwordHash = password_hash($model->password, PASSWORD_DEFAULT);
$db = mysqli_connect('192.168.1.64', 'CoffeeAppUser', 'TyUEMqZncSdj6n4K', 'Coffee&Chocolate');
$sql = sprintf("INSERT INTO Account (First_Name, Last_Name, User_Name, Email_Address, Address_Line1, Address_Line2, 
    City_Town, Country, Country_Code, Post_Code, Password_Hash, Is_Active, Creation_Date, Last_Login) VALUES (
 '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
            mysqli_real_escape_string($db, $model->firstName),
            mysqli_real_escape_string($db, $model->lastName),
            mysqli_real_escape_string($db, $model->userName),
            mysqli_real_escape_string($db, $model->emailAddress),
            mysqli_real_escape_string($db, $model->addressLine1),
            mysqli_real_escape_string($db, $model->addressLine2),
            mysqli_real_escape_string($db, $model->cityTown),
            mysqli_real_escape_string($db, $model->country),
            mysqli_real_escape_string($db, $model->postCode),
            mysqli_real_escape_string($db, $passwordHash),
            mysqli_real_escape_string($db, $IsActive),
            mysqli_real_escape_string($db, $CreationDate),
            mysqli_real_escape_string($db, $LastLogin));

mysqli_query($db, $sql);
mysqli_close($db);



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
 echo $passwordHash;
?>
