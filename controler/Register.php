<?php
include '../model/Account.php';
if ($_SERVER['submitBtn'] == 'POST'){   
$model = new Account();  
$model ->firstName = 'Something';
$model ->lastName = $_POST['lastNameFd'];
$model ->userName = $_POST['userNameFd'];
$model ->emailAddress = $_POST['emailAddressFd'];
$model ->addressLine1 = $_POST['addressLine1Fd'];
$model ->addressLine2 = $_POST['addressLine2Fd'];
$model ->cityTown = $_POST['cityTownFd'];
$model ->country = $_POST['countryFd'];
$model ->postCode = $_POST['postCodeFd'];
$model ->password = $_POST['passwordFd'];
$model ->confirmPassword = $_POST['confirmPasswordFd'];
}
?>

<!DOCTYPE html>
<head></head>
<body>
    <?php echo $modelfirstName;?></br>
    <?php echo $model;?></br>
    <?php var_dump($model);?></br>
    <?php echo $firstName;?></br>
    
</body>