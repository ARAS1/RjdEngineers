<?php
include '../model/Account.php';
if (isset($_POST['Submit1'])){   
$model = new Account();  
$name = $_POST['firstNameFd'];
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
 echo "<p>$firstName </p>";
 echo "<p>$model->firstName </p>";
 echo "<p>$name </p>";
 echo "<p> Output some stuff 1 </p>";
?>

<!DOCTYPE html>
<head></head>
<body>
<?php echo "<p>$model->firstName </p>"?>
<?php echo "<p>$model->firstName </p>"?>
<?php echo "<p>$name </p>"?>
<?php echo "<p> Output some stuff 2</p>"?>
</body>