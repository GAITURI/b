<?php
// // create a connection to the database
$servername ="localhost";
$username="root";
$password ="";
$dbname="schooldata";

// // use mysqli extension to connect to database
$conn = new mysqli($servername,$username,$password,$dbname);



//Define Empty Varibales
  $id="";
  $firstName="";
  $Lastname="";
  $employeeid = "";
  $gender = "";
  $admission_number="";
  $salary="";
  $date="";
  $firstnameErr="";
  $lastnameErr="";
  $employeeiderr="";
  $gendererr="";
  $admission_numbererr="";
  $salaryerr="";
  $iderr="";
  $integerErr="";
  $stmt="";
  $update="";


  
if (isset($_POST['save'])){
  // /capture users input
   
  $id=$_POST['id'];
  $firstName = $_POST['firstname'];
  
  $Lastname = $_POST['Lastname'];
  $employeeid = $_POST['employeeid'];
  $gender = $_POST['gender'];
  $admission_number= $_POST['admission_number'];
  $salary=$_POST['salary'];
  $date=$_POST['reg_date'];






// prepare and bind
$stmt=$conn->prepare("Insert INTO staffdata(id, Lastname,Firstname, Employeeid,Gender,Admission_number,Salary,reg_date)VALUES(?,?,?,?,?,?,?,?)");
$stmt->bind_param("issisiii",$id,$Lastname,$firstName,$employeeid,$gender,$admission_number,
$salary,$date);
 
 // $firstName=$firstName;
 // $lastname=$lastname;
 // $id=$id;
 // $Employeeid=$Employeeid;
 // $Gender=$Gender;
 // $Admission_number=$Admission_number;
$stmt->execute();
echo "new Data Created Successfuly";
$stmt->close();
}  






?>