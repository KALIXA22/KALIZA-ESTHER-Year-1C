<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formmuka2.css">
</head>
<body>
    
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$email1=$_POST['email1'];
$email2=$_POST['email2'];
$email3=$_POST['email3'];
$Phonenumber1=$_POST['Phonenumber1'];
$Phonenumber2=$_POST['Phonenumber2'];
$Phonenumber3=$_POST['Phonenumber3'];
$faname=$_POST['faname'];
$maname=$_POST['maname'];
$Prischool=$_POST['Prischool'];
$Secondary=$_POST['Secondary'];
$male=$_POST['male'];
$female=$_POST['female'];
$colorful=$_POST['colorful'];

}
?>
<table border="1" cellspacing="0" cellpadding="0">
    <tr>
        <th colspan="2">Names</th>
        <th colspan="2">Parent's names</th>
        <th colspan="3">Email</th>
        <th colspan="3">Phone Number</th>
        <th colspan="2">Schools</th>
        <th colspan="2">Gender</th>
        <th>Color</th>
    </tr>
    <tr>
        <td>First name</td>
        <td>Lastname</td>
        <td>Father's names</td>
        <td>Mother's names</td>
        <td>Owner</td>
        <td>Mother</td>
        <td>Father</td>
        <td>Owner</td>
        <td>Mother</td>
        <td>Father</td>
        <td>Primary</td>
        <td>Secondary</td>
        <td>Male</td>
        <td>Female</td>
        <td>Color</td>


    </tr>
    <tr>
        <td><?php echo $Fname; ?></td>
        <td><?php echo $Lname; ?></td>
        <td><?php echo $faname; ?></td>
        <td><?php echo $maname; ?></td>
        <td><?php echo $email1; ?></td>
        <td><?php echo $email2; ?></td>
        <td><?php echo $email3; ?></td>
        <td><?php echo $Phonenumber1; ?></td>
        <td><?php echo $Phonenumber2; ?></td>
        <td><?php echo $Phonenumber3; ?></td>
        <td><?php echo $Prischool; ?></td>
        <td><?php echo $Secondary; ?></td>
        <td><?php echo $male;  ?></td>
        <td><?php echo $female; ?></td>
        <td><?php echo $colorful;  ?></td>


</table>