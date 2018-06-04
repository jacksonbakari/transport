<?php 
$Frstname='';
$Lstname='';
$Emaill='';
$Addres='';
$Countr='';
$Usernm='';
$Agee='';
$error=''; 

if (isset($_POST['submit'])) {
include_once 'profile.php';  
$Firstname=$_POST['Fname'];
$Lastname=$_POST['lname'];
$Email=$_POST['email'];
$Address=$_POST[''];
$Country=$_POST['country'];
$Usernmae=$_POST['username'];
$Age=$_POST['DOB'];

$Frstname=$Firstname;
$Lstname=$Lastname; 
$Emaill=$Email ;
$Addres=$Address ;
$Countr=$Country; 
$Usernm=$Usernmae ;
$Agee=$Age ;
}
 ?>